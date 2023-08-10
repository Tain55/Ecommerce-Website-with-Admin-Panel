<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;

use App\Http\Controllers\CustomerControllerAdmin;
use App\Http\Controllers\ProductControllerAdmin;
use App\Http\Controllers\OrderControllerAdmin;
use App\Http\Controllers\WebControllerAdmin;
use App\Http\Controllers\CategoryControllerAdmin;






/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
    Session::forget('user');

    return redirect('login');
});

Route::post("/register", [CustomerController::class,'register']);
Route::view('/register', 'register');
Route::post("/login", [CustomerController::class,'login']);
Route::get("/", [ProductController::class,'index']);
Route::get("detail/{id}",[ProductController::class, 'detail']);
Route::post("add_to_cart",[ProductController::class,'addToCart']);
Route::get("cartlist",[ProductController::class,'cartList']);
Route::get("removecart/{id}",[ProductController::class,'removeCart']);
Route::get("ordernow",[ProductController::class,'orderNow']);
Route::post("orderplace",[ProductController::class,'orderPlace']);
Route::get("myorders",[ProductController::class,'myOrders']);
Route::get("home",[ProductController::class,'home']);

Route::get('customers',[CustomerControllerAdmin::class, 'show'] );
Route::get('delete/{id}',[CustomerControllerAdmin::class, 'delete'] );
Route::get('orders',[OrderControllerAdmin::class, 'show'] );
Route::view('add','addProduct');
Route::post('add',[ProductControllerAdmin::class ,'addProduct']);
Route::get('products',[ProductControllerAdmin::class, 'show'] );
Route::get('deleteproduct/{id}',[ProductControllerAdmin::class, 'delete']);
Route::get('editproduct/{id}',[ProductControllerAdmin::class, 'showdata']);
Route::post('edit',[ProductControllerAdmin::class ,'update']);
Route::get('editwebsite',[WebControllerAdmin::class, 'editwebpage']);
Route::get('category',[CategoryControllerAdmin::class, 'addcategory']);
Route::post('addbanner',[WebControllerAdmin::class ,'addBanner']);
Route::get('editwebsite',[WebControllerAdmin::class,'showBanner']);
Route::get('deletebanner/{id}',[WebControllerAdmin::class, 'delete'] );



