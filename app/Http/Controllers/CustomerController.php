<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddCustomerRequest;
use App\Models\Customer;
use Cassandra\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = DB::table('customers')->get();
        return view('index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddCustomerRequest $request)
    {
        $customer = new Customer();
        $customer->fill($request->all());
        if (!$request->hasFile('inputFile')) {
            $customer->image = 'uploads/default.png';
        } else {
            $imageName = time().'.'.$request->inputFile->extension();
            $request->inputFile->move(public_path('uploads'), $imageName);
            $customer->image = 'uploads/'.$imageName;
        }
        $customer->save();
        return redirect()->route('customer.index')->with('msg',true);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        return view('edit', compact('customer'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $customer = Customer::findOrFail($id);
        $customer->fill($request->all());
        if (!$request->hasFile('inputFile')) {

        } else {
            $imageName = time().'.'.$request->inputFile->extension();
            $request->inputFile->move(public_path('uploads'), $imageName);
            $customer->image = 'uploads/'.$imageName;
        }
        $customer->save();
        return redirect()->route('customer.index')->with('edit-msg',true);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();
        return redirect()->route('customer.index');

    }

}
