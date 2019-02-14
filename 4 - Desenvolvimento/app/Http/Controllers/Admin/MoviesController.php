<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller
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
            $movies = Movie::where('original_title', 'LIKE', "%$keyword%")
                ->where('status', "1")
                ->orWhere('pt_br_tittle', 'LIKE', "%$keyword%")
                ->where('status', "1")
                ->orWhere('countries', 'LIKE', "%$keyword%")
                ->where('status', "1")
                ->orWhere('year', 'LIKE', "%$keyword%")
                ->where('status', "1")
                ->orWhere('director', 'LIKE', "%$keyword%")
                ->where('status', "1")
                ->orWhere('cast', 'LIKE', "%$keyword%")
                ->where('status', "1")
                ->orWhere('sinopse', 'LIKE', "%$keyword%")
                ->where('status', "1")
                ->orWhere('duration', 'LIKE', "%$keyword%")
                ->where('status', "1")
                ->latest()->paginate($perPage);
        } else {
            $movies = Movie::latest()
                ->where('status', "1")
                ->paginate($perPage);
        }

        return view('admin.movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $genres = Genre::all();
        return view('admin.movies.create', compact('genres'));
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
        $movie = new Movie();

        $movie->original_title = $request->original_title;
        $movie->pt_br_tittle = $request->pt_br_tittle;
        $movie->countries = $request->countries;
        $movie->year = $request->year;
        $movie->director = $request->director;
        $movie->cast = $request->cast;
        $movie->sinopse = $request->sinopse;
        $movie->duration = $request->duration;

        $movie->save();
        $movie->genres()->sync($request->genres, false);

        return redirect('admin/movies')->with('flash_message', 'Movie added!');
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

        return view('admin.movies.show', compact('movie'));
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
        $genres = Genre::all();

        return view('admin.movies.edit', compact('movie', 'genres'));

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
        $movie = Movie::findOrFail($id);

        $movie->original_title = $request->original_title;
        $movie->pt_br_tittle = $request->pt_br_tittle;
        $movie->countries = $request->countries;
        $movie->year = $request->year;
        $movie->director = $request->director;
        $movie->cast = $request->cast;
        $movie->sinopse = $request->sinopse;
        $movie->duration = $request->duration;

        $movie->save();
        if (isset($request->genres)) {
            $movie->genres()->sync($request->genres);
        } else {
            $movie->genres()->sync(array());
        }

        return redirect('admin/movies')->with('flash_message', 'Movie updated!');
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
        $movie = Movie::findOrFail($id);
        //$movie->destroy($id);
        //$movie->genres()->detach();

        $movie->status = 0;
        $movie->save();

        return redirect('admin/movies')->with('flash_message', 'Movie deleted!');
    }
}
