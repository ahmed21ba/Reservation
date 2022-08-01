<?php

namespace App\Http\Controllers;

use App\Models\Hall;
use App\Models\Reserve;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function ownerDashboard()
    {
        $owner = auth()->user()->id;

        $records = Hall::orderBy('id','asc');
        $records = $records->where('owner_id',$owner);
        $records = $records->get();

        return view('owner.index',compact('records'));
    }

     public function customerDashboard()
    {
        $customer = auth()->user()->id;
        $records = Reserve::orderBy('id','asc');
        $records = $records->where('customer_id',$customer);
        $records = $records->get();

        return view('customer.index',compact('records'));
    }


}
