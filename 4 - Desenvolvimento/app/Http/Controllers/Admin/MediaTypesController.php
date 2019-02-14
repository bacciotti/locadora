<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\MediaType;
use Illuminate\Http\Request;

class MediaTypesController extends Controller
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
            $mediatypes = MediaType::where('name', 'LIKE', "%$keyword%")
                ->where('status', "1")
                ->orWhere('price', 'LIKE', "%$keyword%")
                ->where('status', "1")
                ->latest()->paginate($perPage);
        } else {
            $mediatypes = MediaType::latest()
                ->where('status', "1")
                ->paginate($perPage);
        }

        return view('admin.media-types.index', compact('mediatypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.media-types.create');
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
        
        MediaType::create($requestData);

        return redirect('admin/media-types')->with('flash_message', 'MediaType added!');
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
        $mediatype = MediaType::findOrFail($id);

        return view('admin.media-types.show', compact('mediatype'));
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
        $mediatype = MediaType::findOrFail($id);

        return view('admin.media-types.edit', compact('mediatype'));
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
        
        $mediatype = MediaType::findOrFail($id);
        $mediatype->update($requestData);

        return redirect('admin/media-types')->with('flash_message', 'MediaType updated!');
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
        //MediaType::destroy($id);
        
        $mediatype = MediaType::findOrFail($id);
        $mediatype->status = 0;
        $mediatype->save();

        return redirect('admin/media-types')->with('flash_message', 'MediaType deleted!');
    }
}
