<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function index()
//{
//    $records = admin::get();
//    return view('dashboard.admin   .index',compact('records'));
//
//}
//
//    /**
//     * Show the form for creating a new resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function create()
//    {
//        return view('dashboard.admin.create');
//
//    }
//
//    /**
//     * Store a newly created resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @return \Illuminate\Http\Response
//     */
//    public function store(Request $request)
//    {
//        $data = $request->except('_token');
//
//        $admin = new admin();
//        $admin->name=$data['name'];
//        $admin->email=$data['email'];
//        $admin->password=$data['password'];
//        $admin->save();
//        return redirect()->to('dashboard/admin')->with('message','done');
//
//    }
//
//    /**
//     * Display the specified resource.
//     *
//     * @param  \App\Models\admin  $admin
//     * @return \Illuminate\Http\Response
//     */
//    public function show(admin $admin)
//    {
//        //
//    }
//
//    /**
//     * Show the form for editing the specified resource.
//     *
//     * @param  \App\Models\admin  $admin
//     * @return \Illuminate\Http\Response
//     */
//    public function edit(admin $admin)
//    {
//        return view('dashboard.admin.edit',compact('admin'));
//    }
//
//    /**
//     * Update the specified resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @param  \App\Models\admin  $admin
//     * @return \Illuminate\Http\Response
//     */
//    public function update(Request $request, admin $admin)
//    {
//        $data = $request->except('_token');
//
//        $admin->name=$data['name'];
//        $admin->email=$data['email'];
//        $admin->password=$data['password'];
//        $admin->save();
//        return redirect()->to('dashboard/admin')->with('msg','done');
//
//    }
//
//    /**
//     * Remove the specified resource from storage.
//     *
//     * @param  \App\Models\admin  $admin
//     * @return \Illuminate\Http\Response
//     */
//    public function destroy(admin $admin)
//    {
//        $admin->delete();
//        return redirect()->to('dashboard/admin')->with('msg','done');
//
//    }
}
