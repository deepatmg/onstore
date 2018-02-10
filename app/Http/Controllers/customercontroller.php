<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use App\cmodel;
use App\user;
use App\customer_info;
use Hash;
use Auth;
class customercontroller extends Controller
{
    //
    public function login(){
    	    	$parent=DB::table('cmodels')->select('title')->where('parent','=',0)->get();
                
    	return view('user/login',array('parent'=>$parent));
    }
    public function userlogin(Request $request){
    	if(Auth::attempt(['name'=>$request['username'],'password'=>$request['password'],'role'=>"user"])){
            session()->put('loggedin',1);
            return redirect('/');
        }else{
            return redirect()->back();
        }
    }
    public function register(){
    	  $parent=DB::table('cmodels')->select('title')->where('parent','=',0)->get();

    	return view('user/registration',array('parent'=>$parent));
    }
    public function adduser(Request $request){
    	$obj= new user();
    	$cust=new customer_info();
    	$obj->role="user";
    	$cust->firstname=$request->get('firstname');
    	$cust->lastname=$request->get('lastname');
        $obj->name=$request->get('username');
        $cust->username=$request->get('username');
        $obj->email=$request->get('email');
        $cust->email=$request->get('email');
        $cust->mobile_no=$request->get('mobile');
        $obj->password=Hash::make($request->get('password'));
        $result=$obj->save();
        $result1=$cust->save();
       return redirect('logins');
    }
     public function logout(){
        session()->flush('loggedin');
        Auth::logout();
        return redirect('/');
    }
}
