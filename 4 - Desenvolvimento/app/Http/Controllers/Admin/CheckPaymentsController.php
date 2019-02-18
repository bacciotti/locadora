<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\CheckPayment;
use Illuminate\Http\Request;

class CheckPaymentsController extends Controller
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
            $checkpayments = CheckPayment::where('payment_id', 'LIKE', "%$keyword%")
                ->orWhere('bank', 'LIKE', "%$keyword%")
                ->orWhere('agency', 'LIKE', "%$keyword%")
                ->orWhere('account_number', 'LIKE', "%$keyword%")
                ->orWhere('check_number', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $checkpayments = CheckPayment::latest()->paginate($perPage);
        }

        return view('admin.check-payments.index', compact('checkpayments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.check-payments.create');
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
			'bank' => 'required|max:5',
			'agency' => 'required|max:5',
			'account_number' => 'required|min:3',
			'check_number' => 'required|min:3'
		]);
        $requestData = $request->all();
        
        CheckPayment::create($requestData);

        return redirect('admin/check-payments')->with('flash_message', 'CheckPayment added!');
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
        $checkpayment = CheckPayment::findOrFail($id);

        return view('admin.check-payments.show', compact('checkpayment'));
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
        $checkpayment = CheckPayment::findOrFail($id);

        return view('admin.check-payments.edit', compact('checkpayment'));
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
			'bank' => 'required|max:5',
			'agency' => 'required|max:5',
			'account_number' => 'required|min:3',
			'check_number' => 'required|min:3'
		]);
        $requestData = $request->all();
        
        $checkpayment = CheckPayment::findOrFail($id);
        $checkpayment->update($requestData);

        return redirect('admin/check-payments')->with('flash_message', 'CheckPayment updated!');
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
        CheckPayment::destroy($id);

        return redirect('admin/check-payments')->with('flash_message', 'CheckPayment deleted!');
    }
}
