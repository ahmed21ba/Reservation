<?php

namespace App\Http\Controllers;

use App\Http\Requests\Hall\CreateHallRequest;
use App\Http\Requests\Hall\UpdateHallRequest;
use App\Models\governorate;
use App\Models\hall;
use App\Models\ownersOfHall;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HallController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $owner = auth()->user()->id;

        $records = Hall::orderBy('id','asc');
        if(auth()->user()->role == $owner){
            $records = $records->where('owner_id',$owner);
        }
        $records = $records->get();

        foreach ($records as $hall){
            $img_link = Storage::url($hall->image);
            $hall->image = $img_link;
        }
        return view('dashboard.hall.index',compact('records'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        dd($records->image);




        $governoratelist = governorate::get();
         $ownersOfHallslist= User::where('role', 'owner')->get();
        return view('dashboard.hall.create',compact('governoratelist','ownersOfHallslist'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateHallRequest $request)
    {
        $data = $request->except('_token');
//        $hall = new hall();
//        $hall->name=$data['name'];
//        $hall->governorate=$data['governorate'];
//        $hall->address=$data['address'];
//        $hall->description=$data['description'];
//        $hall->save();
        $file = $request->file('image');
        $path = 'uploads/images/';
        $name = time() . '.' . $file->getClientOriginalExtension();
        $file->move($path  , $name);


        $data['image'] = $path . $name;


        hall::create($data);
        return redirect()->to('dashboard/hall')->with('message', 'تم إضافة الصالة بنجاح');

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\hall  $hall
     * @return \Illuminate\Http\Response
     */
    public function show(hall $hall)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\hall  $hall
     * @return \Illuminate\Http\Response
     */
    public function edit(hall $hall)
    {
        $governoratelist = governorate::get();
        $ownersOfHallslist = ownersOfHall::get();
        return view('dashboard.hall.edit',compact('hall','governoratelist','ownersOfHallslist'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\hall  $hall
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHallRequest $request, hall $hall)
    {
        $data = $request->except('_token');

        $hall->name=$data['name'];
        $hall->governorate_id=$data['governorate_id'];
        $hall->address=$data['address'];
        $hall->description=$data['description'];
        $hall->whatsapp=$data['whatsapp'];
        $hall->price=$data['price'];

//        $image = $request->file('image');
//        $path = 'uploads/images/';
//        $name = time()+rand(1, 10000000) . '.' . $image->getClientOriginalExtension();
//        Storage::disk('local')->put($path.$name , file_get_contents($image));

        $hall->save();
        return redirect()->to('dashboard/hall')->with('message', 'تم تعديل بيانات الصالة بنجاح');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\hall  $hall
     * @return \Illuminate\Http\Response
     */
    public function destroy(hall $hall)
    {
        $hall->delete();
        return redirect()->to('dashboard/hall')->with('message', 'تم الحذف بنجاح  ');

    }

    public function  search_form() {

        return view('website/home');
    }

    public function searchForm (Request $request) {

        $data = $request->except('_token');
        $records = [];
        if (   isset($data['name']) != '' ) {
            $records  = Hall::orderBy('id','asc');
            if ($data['name'] != '')
                $records = $records->where('name','like','%'.str_replace(' ','%',$data['name']).'%');

            $records = $records->get();

        }
        return response()->view('website/halls',['records'=>$records]);
    }


}
