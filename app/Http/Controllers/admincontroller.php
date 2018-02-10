<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\pmodel;
use App\user;
use App\image;
use App\cmodel;
use DB;
use App\catlevel;
use App\size;

class admincontroller extends Controller
{
    //
     public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
    	$id=session()->get('userid');
    	$obj=user::find($id);
    	//dd($obj);
    	return view('admin/index',array('user'=>$obj));
    }
    
   
}







