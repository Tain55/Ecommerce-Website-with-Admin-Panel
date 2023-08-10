<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;

use Illuminate\Support\Facades\File;

class ProductControllerAdmin extends Controller
{
    function addProduct(Request $req){
        $product = new product;
        $product->name = $req->name;
        $product->price = $req->price;
        $product -> category = $req->category;
        $product->description= $req->description;

        if($req ->hasFile('image')){
            $file = $req->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/products',$filename);
            $product->gallery  ="uploads/products/{$filename}";
        }

        $product->save();
        return redirect('products');
    }

    
    

    function show(){
        $data = product::all();

        return view('viewProductAdmin',['products'=> $data]);
    }
    function delete($id){
        $data = product::find($id);
        
        $destination = $data->gallery;
        if(File::exists($destination))
        {
            File::delete($destination);
        }

        $data->delete();

        return redirect('products');
    }
    function showdata($id){
        $data = product::find($id);
        return view('updateProductAdmin',['data'=>$data]);
    }

    function update(Request $req){
        $data = product::find($req->id);
        $data -> name = $req->name;
        $data ->price = $req->price;
        $data ->category = $req->category;
        $data ->description = $req->description;
        $data ->gallery = $req->gallery;
        $data -> save();
        return redirect('editproduct');
        
    }
}
