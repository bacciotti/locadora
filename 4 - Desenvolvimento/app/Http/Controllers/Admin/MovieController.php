<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
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
            $movie = Movie::where('original_title', 'LIKE', "%$keyword%")
                ->orWhere('pt_br_tittle', 'LIKE', "%$keyword%")
                ->orWhere('countries', 'LIKE', "%$keyword%")
                ->orWhere('year', 'LIKE', "%$keyword%")
                ->orWhere('director', 'LIKE', "%$keyword%")
                ->orWhere('cast', 'LIKE', "%$keyword%")
                ->orWhere('sinopse', 'LIKE', "%$keyword%")
                ->orWhere('duration', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $movie = Movie::latest()->paginate($perPage);
        }

        return view('admin.movie.index', compact('movie'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.movie.create');
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
        
        Movie::create($requestData);

        return redirect('admin/movie')->with('flash_message', 'Movie added!');
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
        $movie = Movie::findOrFail($id);

        return view('admin.movie.show', compact('movie'));
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
        $movie = Movie::findOrFail($id);

        return view('admin.movie.edit', compact('movie'));
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
        
        $movie = Movie::findOrFail($id);
        $movie->update($requestData);

        return redirect('admin/movie')->with('flash_message', 'Movie updated!');
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
        Movie::destroy($id);

        return redirect('admin/movie')->with('flash_message', 'Movie deleted!');
    }
}
