<?php

namespace App\Http\Controllers\Site;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\MediaType;
use App\Models\Movie;
use App\Models\Distributor;
use App\Models\Item;
use Illuminate\Http\Request;

class SiteItemsController extends Controller
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
            $items = Item::select('items.*', 'media_types.name', 'movies.pt_br_tittle', 'distributors.corporate_name')
                ->join('media_types', 'media_types.id', '=', 'items.media_type_id')
                ->join('movies', 'movies.id', '=', 'items.movie_id')
                ->join('distributors', 'distributors.id', '=', 'items.distributor_id')
                ->where('media_types.name', 'LIKE', "%$keyword%")
                ->where('items.status', "1")
                ->orWhere('movies.pt_br_tittle', 'LIKE', "%$keyword%")
                ->where('items.status', "1")
                ->orWhere('distributors.corporate_name', 'LIKE', "%$keyword%")
                ->where('items.status', "1")
                ->where('date_acquisition', 'LIKE', "%$keyword%")
                ->where('items.status', "1")
                ->orWhere('serial_number', 'LIKE', "%$keyword%")
                ->where('items.status', "1")
                ->orWhere('media_type_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $items = Item::select('items.*', 'media_types.name', 'movies.pt_br_tittle', 'distributors.corporate_name')
                ->join('media_types', 'media_types.id', '=', 'items.media_type_id')
                ->join('movies', 'movies.id', '=', 'items.movie_id')
                ->join('distributors', 'distributors.id', '=', 'items.distributor_id')
                ->latest()
                ->where('items.status', "1")
                ->paginate($perPage);
        }

        return view('admin.items.index', compact('items'));
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
        return view('admin.items.create', compact('media_types','movies','distributors'));
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
        Item::create($requestData);
        return redirect('admin/items')->with('flash_message', 'Item added!');
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
        $item = Item::findOrFail($id);

        return view('admin.items.show', compact('item'));
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
        $item = Item::findOrFail($id);

        $media_types = MediaType::all();
        $movies = Movie::all();
        $distributors = Distributor::all();

        return view('admin.items.edit', compact('item','media_types','movies','distributors'));
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
        $item = Item::findOrFail($id);
        $item->update($requestData);
        return redirect('admin/items')->with('flash_message', 'Item updated!');
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
        //Item::destroy($id);
        
        $item = Item::findOrFail($id);
        $item->status = 0;
        $item->save();

        return redirect('admin/items')->with('flash_message', 'Item deleted!');
    }
}
