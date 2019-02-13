<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\CardPayment;
use Illuminate\Http\Request;

class CardPaymentsController extends Controller
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
            $cardpayments = CardPayment::where('payment_id', 'LIKE', "%$keyword%")
                ->orWhere('company', 'LIKE', "%$keyword%")
                ->orWhere('number', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $cardpayments = CardPayment::latest()->paginate($perPage);
        }

        return view('admin.card-payments.index', compact('cardpayments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.card-payments.create');
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
			'payment_id' => 'required',
			'company' => 'required',
			'number' => 'required|min:3'
		]);
        $requestData = $request->all();
        
        CardPayment::create($requestData);

        return redirect('admin/card-payments')->with('flash_message', 'CardPayment added!');
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
        $cardpayment = CardPayment::findOrFail($id);

        return view('admin.card-payments.show', compact('cardpayment'));
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
        $cardpayment = CardPayment::findOrFail($id);

        return view('admin.card-payments.edit', compact('cardpayment'));
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
			'payment_id' => 'required',
			'company' => 'required',
			'number' => 'required|min:3'
		]);
        $requestData = $request->all();
        
        $cardpayment = CardPayment::findOrFail($id);
        $cardpayment->update($requestData);

        return redirect('admin/card-payments')->with('flash_message', 'CardPayment updated!');
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
        CardPayment::destroy($id);

        return redirect('admin/card-payments')->with('flash_message', 'CardPayment deleted!');
    }
}
