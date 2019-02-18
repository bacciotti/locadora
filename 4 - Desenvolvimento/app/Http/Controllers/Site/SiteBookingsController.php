<?php

namespace App\Http\Controllers\Site;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Booking;
use App\Models\Movie;
use App\Models\User;
use Illuminate\Http\Request;

class SiteBookingsController extends Controller
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
            $bookings = Booking::select('bookings.*', 'users.name')
                ->join('users', 'users.id', '=', 'bookings.user_id')
                ->where('users.name', 'LIKE', "%$keyword%")
                ->where('bookings.status', "1")
                ->orWhere('date', 'LIKE', "%$keyword%")
                ->where('bookings.status', "1")
                ->latest()->paginate($perPage);
        } else {
            $bookings = Booking::select('bookings.*', 'users.name')
                ->join('users', 'users.id', '=', 'bookings.user_id')
                ->latest()
                ->where('bookings.status', "1")
                ->paginate($perPage);
        }

        return view('site.bookings.index', compact('bookings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $users = User::all();
        $movies = Movie::all();
        return view('site.bookings.create', compact('movies','users'));
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
        $booking = new Booking();

        $booking->date = $request->date;
        $booking->user_id = $request->user_id;

        $booking->save();
        $booking->movies()->sync($request->movies, false);

        return redirect('bookings')->with('flash_message', 'Booking added!');
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
        $booking = Booking::findOrFail($id);

        return view('site.bookings.show', compact('booking'));
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
        $booking = Booking::findOrFail($id);
        $users = User::all();
        $movies = Movie::all();

        return view('site.bookings.edit', compact('booking','movies','users'));
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
        $booking = Booking::findOrFail($id);

        $booking->date = $request->date;
        $booking->user_id = $request->user_id;

        $booking->save();
        if (isset($request->movies)) {
            $booking->movies()->sync($request->movies);
        } else {
            $booking->movies()->sync(array());
        }

        return redirect('bookings')->with('flash_message', 'Booking updated!');
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
        //Booking::destroy($id);
        
        $booking = Booking::findOrFail($id);
        $booking->status = 0;
        $booking->save();

        return redirect('bookings')->with('flash_message', 'Booking deleted!');
    }
}
