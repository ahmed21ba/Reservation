<?php

namespace App\Http\Controllers\Website;
use App\Http\Controllers\Controller;
use App\Models\Hall;
use Illuminate\Http\Request;
use App\Models\reserve;


class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $halls = Hall::get();
        return view('website.home',compact('halls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        return view('website.reserve');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $data = $request->except('_token');
//        $reserve = new reserve();
////        $reserve->status=$data['status'];
//        $reserve->date_from=$data['date_from'];
//        $reserve->date_to=$data['date_to'];
//        $reserve->time_form=$data['time_form'];
//        $reserve->time_to=$data['time_to'];
////        $reserve->appropriate=$data['appropriate'];
////        $reserve->hall_id=$data['hall_id'];
////        $reserve->customer_id=$data['customer_id'];
//        $reserve->save();
////        reserve::create($request->all());
//        return redirect()->back()->with('message','تم اضافة الحجز بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }



    public function searchForm (Request $request) {

        $data = $request->except('_token');
        $records = [];
        if (   isset($data['name']) != '' ) {
            $records  = Hall::orderBy('id','asc');
            if ($data['name'] != '')
                $records = $records->where('name','like','%'.str_replace(' ','%',$data['name']).'%');
            //     $name=$data['name'];
            //     $records = $records->where('name','like',"%.$name.%");
            $records = $records->get();
            foreach ($records as $datastore) {
                $img_link = Storage::url($datastore->image);
                $datastore->image = $img_link;
            }
        }

        return response()->view('store.search_form',['records'=>$records]);

    }


}

