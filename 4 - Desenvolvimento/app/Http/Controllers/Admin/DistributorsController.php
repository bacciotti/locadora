<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Distributor;
use Illuminate\Http\Request;

class DistributorsController extends Controller
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
            $distributors = Distributor::where('corporate_name', 'LIKE', "%$keyword%")
                ->where('status', "1")
                ->orWhere('cnpj', 'LIKE', "%$keyword%")
                ->where('status', "1")
                ->orWhere('address', 'LIKE', "%$keyword%")
                ->where('status', "1")
                ->orWhere('phone', 'LIKE', "%$keyword%")
                ->where('status', "1")
                ->orWhere('contact_person', 'LIKE', "%$keyword%")
                ->where('status', "1")
                ->latest()->paginate($perPage);
        } else {
            $distributors = Distributor::latest()
                ->where('status', "1")
                ->paginate($perPage);
        }

        return view('admin.distributors.index', compact('distributors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.distributors.create');
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
        
        $this->validate($request, [
			'corporate_name' => 'required',
			'cnpj' => 'required|unique:distributors|min:14|max:14',
			'address' => 'required',
			'phone' => 'required|unique:distributors|min:8|max:12',
			'contact_person' => 'required'
		]);
        $requestData = $request->all();
        
        Distributor::create($requestData);

        return redirect('admin/distributors')->with('flash_message', 'Distributor added!');
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
        $distributor = Distributor::findOrFail($id);

        return view('admin.distributors.show', compact('distributor'));
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
        $distributor = Distributor::findOrFail($id);

        return view('admin.distributors.edit', compact('distributor'));
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
        $this->validate($request, [
			'corporate_name' => 'required',
			'cnpj' => 'required|unique:distributors|min:14|max:14',
			'address' => 'required',
			'phone' => 'required|unique:distributors|min:8|max:12',
			'contact_person' => 'required'
		]);
        $requestData = $request->all();
        
        $distributor = Distributor::findOrFail($id);
        $distributor->update($requestData);

        return redirect('admin/distributors')->with('flash_message', 'Distributor updated!');
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
        //Distributor::destroy($id);
        
        $distributor = Distributor::findOrFail($id);
        $distributor->status = 0;
        $distributor->save();

        return redirect('admin/distributors')->with('flash_message', 'Distributor deleted!');
    }
}
