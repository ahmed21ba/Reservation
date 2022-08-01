<?php

namespace App\Http\Controllers;

use App\Models\ownersOfHall;
use App\Models\User;
use Illuminate\Http\Request;

class OwnersOfHallsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $records = User::where('role', 'owner')->get();
        return view('dashboard.ownerofhalls.index',compact('records'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.ownerofhalls.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        User::create($request->all());
        return redirect()->to('dashboard/ownerofhalls')->with('message','تم اضافة المالك بنجاح');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ownersOfHall  $ownersOfHalls
     * @return \Illuminate\Http\Response
     */
    public function show(ownersOfHall $ownersOfHalls, $id)
    {
        $records = User::where('role', 'owner')->find($id);
        if (empty($records)){
            return redirect()->back();
        }
        return view('dashboard.ownerofhalls.registrationrequests',compact('records'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ownersOfHall  $ownersOfHalls
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ownerOfHalls = User::where('role', 'owner')->find($id);
        if (empty($ownerOfHalls)){
            return redirect()->back();
        }
        return view('dashboard.ownerofhalls.edit',compact('ownerOfHalls'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ownersOfHall  $ownersOfHalls
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ownersOfHall $ownersOfHalls, $id)
    {
        $ownersOfHalls = User::find($id);
        if (empty($ownersOfHalls)) {
            return redirect()->back();
        }
        $ownersOfHalls->update($request->all());
        return redirect()->to('dashboard/ownerofhalls')->with('message','تم التعديل بنجاح');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ownersOfHall  $ownersOfHalls
     * @return \Illuminate\Http\Response
     */
    public function destroy(ownersOfHall $ownersOfHalls, $id)
    {
        $ownerOfHalls = User::where('role', 'owner')->find($id);
        if (empty($ownerOfHalls)){
            return redirect()->back();
        }
        $ownerOfHalls->delete();

        session('msg', 'done successfully deleted');
        return redirect()->to('dashboard/ownerofhalls')->with(['msg'=>'done successfully deleted']);

    }
}
