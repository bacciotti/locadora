<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Genre;
use App\Models\GenreMovie;
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
                ->orWhere('pt_br_tittle', 'LIKE', "%$keyword%")
                ->orWhere('countries', 'LIKE', "%$keyword%")
                ->orWhere('year', 'LIKE', "%$keyword%")
                ->orWhere('director', 'LIKE', "%$keyword%")
                ->orWhere('cast', 'LIKE', "%$keyword%")
                ->orWhere('sinopse', 'LIKE', "%$keyword%")
                ->orWhere('duration', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $movies = Movie::latest()->paginate($perPage);
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

        $movie->genre()->sync($request->genres, false);


        //$requestData = $request->all();
        //Movie::create($requestData);

        //$requestData->genre()->sync($request->genre, false);

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
        $genres_movie = Genre::all();

        return view('admin.movies.edit',compact('movie', 'genres', 'genres_movie'));

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
        Movie::destroy($id);

        return redirect('admin/movies')->with('flash_message', 'Movie deleted!');
    }
}