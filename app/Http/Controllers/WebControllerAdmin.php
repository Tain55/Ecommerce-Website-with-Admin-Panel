<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\banner;
use Illuminate\Support\Facades\File;

class WebControllerAdmin extends Controller
{
    function addBanner(Request $req){
        $banner = new banner;
        $banner -> link = $req->link;

        if($req ->hasFile('image')){
            $file = $req->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/banners',$filename);
            $banner->photos  ="uploads/banners/{$filename}";
        }

        $banner->save();
        return redirect('editwebsite');
    }

    function showBanner(){
        $data = banner::all();

        return view('webcontrollerAdmin',['banners'=> $data]);
    }
    function delete($id){
        $data = banner::find($id);
        
        $destination = $data->photos;
        if(File::exists($destination))
        {
            File::delete($destination);
        }

        $data->delete();

        return redirect('editwebsite');
    }


    function editwebpage(){
        return view('webcontrollerAdmin');
    }
}
