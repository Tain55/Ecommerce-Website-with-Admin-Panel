<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\Cart;
use App\Models\order;
use App\Models\banner;
use Session;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    function index()
    {
        $banner = banner::all();
        $data = product::all();
        $id = array_values($banner->toArray());

        return view('product',['product'=>$data,'banner'=>$banner, 'id' => $id ]);
    }

    function detail($id){
        $data = product::find($id);     
        return view('detail',['product' => $data]);
    }

    function addToCart(Request $req){
        if($req->session()->has('user'))
        {
            $cart = new cart;
            $cart -> user_id  = $req->session()->get('user')['id'];
            $cart -> product_id = $req-> product_id; 
            $cart -> save();
            return redirect ('/');

        }else{
            return redirect('login');
        }

        return "Hello";
    }
    static function cartItem(){
        $userId = Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();
    }
    function cartList(){
        $userId = Session::get('user')['id'];
        $products = DB::table('carts')
        ->join('products','carts.product_id', '=', 'products.id')
        ->where('carts.user_id',$userId)
        ->select('products.*','carts.id as cart_id')
        ->get();

        return view('cartlist',['products'=>$products]);
    }

    function removeCart($id){
        Cart::destroy($id);
        return redirect('cartlist');
    }

    function orderNow(){
        $userId = Session::get('user')['id'];
        $total = DB::table('carts')
        ->join('products','carts.product_id', '=', 'products.id')
        ->where('carts.user_id',$userId)
        ->select('products.*','carts.id as cart_id')
        ->sum('products.price');

        return view('order',['total'=>$total]);

    }

    function orderPlace(Request $req){
        $userId = Session::get('user')['id'];
        $allCart = Cart::where('user_id',$userId)->get();
        foreach($allCart as $cart){
            $order = new Order;
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['user_id'];
            $order->status = "pending";
            $order->payment_method = $req->payment;
            $order->payment_status = "pending";
            $order->address = $req->address;
            $order->save();
            Cart::where('user_id',$userId)->delete();
        }
        $req->input(); 
        return redirect('/'); 
    }

    function home(){
        return redirect('/');
    }

    function myOrders(){
        $userId = Session::get('user')['id'];
        $orders = DB::table('orders')
        ->join('products','orders.product_id', '=', 'products.id')
        ->where('orders.user_id',$userId)
        ->get();

        return view('myorders',['orders'=>$orders]);
    }

}
