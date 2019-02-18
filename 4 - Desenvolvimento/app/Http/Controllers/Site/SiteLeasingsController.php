<?php

namespace App\Http\Controllers\Site;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Booking;
use App\Models\Item;
use App\Models\Leasing;
use App\Models\Movie;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Http\Request;

class SiteLeasingsController extends Controller
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
            $leasings = Leasing::select('leasings.*', 'users.name')
                ->join('users', 'users.id', '=', 'leasings.user_id')
                ->where('users.name', 'LIKE', "%$keyword%")
                ->where('leasings.status', "1")
                ->orWhere('leasings.created_at', 'LIKE', "%$keyword%")
                ->where('leasings.status', "1")
                ->orWhere('leasings.expected_date_devolution', 'LIKE', "%$keyword%")
                ->where('leasings.status', "1")
                ->orWhere('date_time_devolution', 'LIKE', "%$keyword%")
                ->where('leasings.status', "1")
                ->latest()->paginate($perPage);
        } else {
            $leasings = Leasing::select('leasings.*', 'users.name')
                ->join('users', 'users.id', '=', 'leasings.user_id')
                ->latest()
                ->where('leasings.status', "1")
                ->paginate($perPage);
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
        $items = Item::select('items.*', 'movies.pt_br_tittle', 'media_types.name')
            ->join('movies', 'movies.id', '=', 'items.movie_id')
            ->join('media_types', 'media_types.id', '=', 'items.media_type_id')
            ->get();
        $bookings = Booking::all();
        $users = User::all();
        $movies = Movie::all();
        $payment = Payment::all();
        return view('admin.leasings.create', compact('items', 'users', 'bookings', 'movies', 'payment'));
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

        $leasing->expected_date_devolution = $request->expected_date_devolution;
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
        $items = Item::select('items.*', 'movies.pt_br_tittle', 'media_types.name')
            ->join('movies', 'movies.id', '=', 'items.movie_id')
            ->join('media_types', 'media_types.id', '=', 'items.media_type_id')
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

        $leasing->expected_date_devolution = $request->expected_date_devolution;
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
        //Leasing::destroy($id);
        
        $leasing = Leasing::findOrFail($id);
        $leasing->status = 0;
        $leasing->save();

        return redirect('admin/leasings')->with('flash_message', 'Leasing deleted!');
    }

}
