<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\MediaType;
use App\Models\Movie;
use App\Models\Distributor;
use App\Models\Iten;
use Illuminate\Http\Request;

class ItensController extends Controller
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
            $itens = Iten::where('date_acquisition', 'LIKE', "%$keyword%")
                ->orWhere('serial_number', 'LIKE', "%$keyword%")
                ->orWhere('media_type_id', 'LIKE', "%$keyword%")
                ->orWhere('movie_id', 'LIKE', "%$keyword%")
                ->orWhere('distributor_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $itens = Iten::latest()->paginate($perPage);
        }

        return view('admin.itens.index', compact('itens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $media_types = MediaType::all();
        $movies = Movie::all();
        $distributors = Distributor::all();
        return view('admin.itens.create', compact('media_types','movies','distributors'));
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
        
        Iten::create($requestData);

        return redirect('admin/itens')->with('flash_message', 'Iten added!');
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
        $iten = Iten::findOrFail($id);

        return view('admin.itens.show', compact('iten'));
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
        $iten = Iten::findOrFail($id);

        $media_types = MediaType::all();
        $movies = Movie::all();
        $distributors = Distributor::all();

        return view('admin.itens.edit', compact('iten','media_types','movies','distributors'));
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
        
        $iten = Iten::findOrFail($id);
        $iten->update($requestData);

        return redirect('admin/itens')->with('flash_message', 'Iten updated!');
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
        Iten::destroy($id);

        return redirect('admin/itens')->with('flash_message', 'Iten deleted!');
    }
}
