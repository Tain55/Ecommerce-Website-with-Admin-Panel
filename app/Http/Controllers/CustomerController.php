<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\customer;
use Illuminate\Support\Facades\Hash;
class CustomerController extends Controller
{
    function login(Request $req){
        $user =  customer::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password,$user->password))
        {
            return "Uesrname or password is not matched";
        }
        else{
            $req -> session()->put('user',$user);
            return redirect('/');
        }
    }

    function register(Request $req){
        // return $req->input();
        $user = new customer;
        $user -> name = $req->name;
        $user -> email = $req->email;
        $user ->password = Hash::make($req -> password);
        $user -> save();
        return redirect ('/login');
    }
}
