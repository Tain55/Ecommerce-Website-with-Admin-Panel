<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\product;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderControllerAdmin extends Controller
{
    function show(){
        $data1= Order::all();
        // $data2= DB::table('orders')
        // ->join('orders','product_id','=','products.name')
        // ->get();
        return view('ordersAdmin',['orders'=>$data1]);
    }
}
