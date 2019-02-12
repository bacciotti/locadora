<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Leasing;
use Illuminate\Http\Request;

class LeasingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $leasings = Leasing::where('date_time_leasing', 'LIKE', "%$keyword%")
                ->orWhere('date_time_devolution', 'LIKE', "%$keyword%")
                ->orWhere('user_id', 'LIKE', "%$keyword%")
                ->orWhere('booking_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $leasings = Leasing::latest()->paginate($perPage);
        }

        return view('admin.leasings.index', compact('leasings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.leasings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Leasing::create($requestData);

        return redirect('admin/leasings')->with('flash_message', 'Leasing added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $leasing = Leasing::findOrFail($id);

        return view('admin.leasings.show', compact('leasing'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $leasing = Leasing::findOrFail($id);

        return view('admin.leasings.edit', compact('leasing'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $leasing = Leasing::findOrFail($id);
        $leasing->update($requestData);

        return redirect('admin/leasings')->with('flash_message', 'Leasing updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Leasing::destroy($id);

        return redirect('admin/leasings')->with('flash_message', 'Leasing deleted!');
    }
}
