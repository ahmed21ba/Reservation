<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Governorate\CreateGovernorateRequest;
use App\Http\Requests\Governorate\UpdateGovernorateRequest;
use App\Http\Requests\Hall\UpdateHallRequest;
use App\Models\governorate;
use Illuminate\Http\Request;




class governorateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = governorate::get();
        return view('dashboard.governorate.index',compact('records'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.governorate.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateGovernorateRequest $request)
    {
        $data = $request->except('_token');

        $governorate = new governorate();
        $governorate->name=$data['name'];
        $governorate->save();
        return redirect()->to('dashboard/governorate')->with('message','تم اضافة المنطقة بنجاح');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\admin  $governorate
     * @return \Illuminate\Http\Response
     */
    public function show(governorate $governorate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\admin  $governorate
     * @return \Illuminate\Http\Response
     */
    public function edit(governorate $governorate)
    {
        return view('dashboard.governorate.edit',compact('governorate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\admin  $governorate
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGovernorateRequest $request, governorate $governorate)
    {
        $data = $request->except('_token');

        $governorate->name=$data['name'];
        $governorate->save();
        return redirect()->to('dashboard/governorate')->with('message','تم التعديل  بنجاح');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admin  $governorate
     * @return \Illuminate\Http\Response
     */
    public function destroy(governorate $governorate)
    {
        $governorate->delete();
        return redirect()->to('dashboard/governorate')->with('message','تم الحذف بنجاح');

    }
}
