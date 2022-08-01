<?php

namespace App\Http\Controllers;

use App\Models\customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = customer::get();
        return view('dashboard.customer.index',compact('records'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.customer.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');

        $customer = new customer();
        $customer->name=$data['name'];
        $customer->phone=$data['phone'];
        $customer->password=$data['password'];
        $customer->email=$data['email'];
        $customer->save();
        return redirect()->to('dashboard/customer')->with('message','تم اضافة مستخدم بنجاح');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(customer $customer)
    {
        return view('dashboard.customer.edit',compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, customer $customer)
    {
        $data = $request->except('_token');

        $customer->name=$data['name'];
        $customer->phone=$data['phone'];
        $customer->password=$data['password'];
        $customer->email=$data['email'];
        $customer->save();
        return redirect()->to('dashboard/customer')->with('message','تم تعديل بيانات المستخدم بنجاح');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(customer $customer)
    {
        $customer->delete();
        return redirect()->to('dashboard/customer')->with('message','تم حذف المستخدم بنجاح');

    }
}
