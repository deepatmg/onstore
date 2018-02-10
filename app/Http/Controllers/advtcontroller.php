<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\admodel;
use DB;
class advtcontroller extends Controller
{
    //
     public function __construct(){
        $this->middleware('auth');
    }
    public function addadvt(){
    	return view('admin/advertisement/add_advertisement');

    }
    public function saveadvt(Request $request){
    	$obj=new admodel();
    	$obj->title=$request->get('title');
        $obj->price=$request->get('price');
        $obj->sortorder=$request->get('sortorder');
        $obj->SEOurl=$request->get('keyword');
        if(!is_null($request->file('image'))){
            $file = $request->file('image');
            $destination_path = "lib/ad_image/";
            $filename = $file->getClientOriginalName();
            $file->move($destination_path,$filename);
            $image = $destination_path.$filename;
            $obj->image = $image;
        }
        $obj->status=$request->get('status');
        $result=$obj->save();
        if($request){
            return redirect('addadvt');
        }
    }
    public function showadvt(){
    	$obj=admodel::all();
    	return view('admin/advertisement/show_advertisement',array('res'=>$obj));
    }

    public function editadvt($id){
        $obj=admodel::find($id);
        return view('admin/advertisement/edit_advertisement',array('res'=>$obj));
    }
    public function resaveadvt($id,Request $request){
        $obj=admodel::find($id);
        $obj->title=$request->get('title');
        $obj->price=$request->get('price');
        $obj->sortorder=$request->get('sortorder');
        $obj->SEOurl=$request->get('keyword');
        if(!is_null($request->file('image'))){
            $file = $request->file('image');
            $destination_path = "lib/ad_image/";
            $filename = $file->getClientOriginalName();
            $file->move($destination_path,$filename);
            $image = $destination_path.$filename;
            $obj->image = $image;
        }
        $obj->status=$request->get('status');
        $result=$obj->save();
        if($request){
            return redirect('showadvt');
        }
    }
    public function deladvt(Request $request){
        $selected=$request->get('selected');
        foreach($selected as $selec){
            $img=admodel::find($selec);
            unlink($img->image);
            $img->delete();
        }
        return redirect('showadvt');

    }
}







