<?php

namespace App\Http\Controllers;
use App\Models\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerControllerAdmin extends Controller
{
    function show(){
        $data =  Customer::all();
        return view('customerViewAdmin',['customers' => $data]);
    }
    function delete($id){
        $data = Customer::find($id);
        $data ->delete(); 
        return redirect('/');
    }
}
