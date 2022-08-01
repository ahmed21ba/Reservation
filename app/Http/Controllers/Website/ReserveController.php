<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Http\Requests\Reserve\CreateReserveRequest;
use App\Http\Requests\Reserve\UpdateReserveRequest;
use App\Models\Hall;
use App\Models\Reserve;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;


class ReserveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hall = new Hall();
        $reserve = new Reserve();

        return view('website.reserve',compact('reserve','hall'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Hall $hall)
    {
        $reserve = Reserve::where('hall_id',$hall->id)->Where('status',1)->get() ;
        return view('website.reserve',compact('hall','reserve'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Hall $hall,CreateReserveRequest $request)
    {
        $st = date('Y-m-d H:i', strtotime($request->start_time));
        $et = date('Y-m-d H:i', strtotime($request->end_time));

        $reserve = Reserve::where('hall_id',$hall->id)
            ->where(function($query) use ($st, $et) {
                $query->whereBetween('start_time', [$st, $et])
                      ->orWhereBetween('end_time', [$st, $et]);
            })->first();


        if(!empty($reserve)){
            return  redirect()->back()->with('message', 'عذرا الموعد الذي تم اختياره محجوز مسبقا يرجى اختيار موعد اخر ');
        }

        $data = $request->except('_token');
        $reserve = new Reserve();
        $reserve->start_time=$data['start_time'];
        $reserve->end_time=$data['end_time'];
        $reserve->occasion=$data['occasion'];
        $reserve->hall_id=$hall->id;
        $reserve->customer_id=auth()->user()->id;
        $reserve->save();
        return redirect()->back()->with('message', 'تم ارسال طلب الحجز بنجاح بانتظار موافقة مالك الصالة ');
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
    public function update(UpdateReserveRequest $request, $id)
    {
        $data = $request->except('_token');
        $reserve = new Reserve();
        $reserve->status=$data['status'];
        $reserve->save();
        return redirect()->back()->with('message', 'تم ');

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
}
