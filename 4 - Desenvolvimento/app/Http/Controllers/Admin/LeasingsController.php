<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Booking;
use App\Models\Item;
use App\Models\Leasing;
use App\Models\Movie;
use App\Models\User;
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
        $items = Item::select('movies.*', 'items.*')
            ->join('movies', 'movies.id', '=', 'items.movie_id')
            ->get();
        $bookings = Booking::all();
        $users = User::all();
        $movies = Movie::all();
        return view('admin.leasings.create', compact('items', 'users', 'bookings', 'movies'));
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

        $leasing = new Leasing();

        $leasing->date_time_leasing = $request->date_time_leasing;
        $leasing->date_time_devolution = $request->date_time_devolution;
        $leasing->user_id = $request->user_id;
        $leasing->booking_id = $request->booking_id;

        $leasing->save();
        $leasing->items()->sync($request->items, false);

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
        $items = Item::select('movies.*', 'items.*')
            ->join('movies', 'movies.id', '=', 'items.movie_id')
            ->get();
        $bookings = Booking::all();
        $users = User::all();

        $leasing = Leasing::findOrFail($id);

        return view('admin.leasings.edit', compact('leasing','items', 'bookings', 'users'));
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
        $leasing = Leasing::findOrFail($id);

        $leasing->date_time_leasing = $request->date_time_leasing;
        $leasing->date_time_devolution = $request->date_time_devolution;
        $leasing->user_id = $request->user_id;
        $leasing->booking_id = $request->booking_id;

        $leasing->save();
        if (isset($request->items)) {
            $leasing->items()->sync($request->items, false);
        } else {
            $leasing->items()->sync(array());
        }

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
