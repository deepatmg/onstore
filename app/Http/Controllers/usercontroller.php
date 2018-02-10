<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\user;
use DB;
use Hash;

class usercontroller extends Controller
{
    //
    public function login(){
    	return view('admin/logfile/login');
    }
    public function loginpost(Request $request){
        $userid=DB::table('users')->where('name',$request['username'])->pluck('id');
        //dd($userid[0]);
    	if(Auth::attempt(['name'=>$request['username'],'password'=>$request['password'],'role'=>"admin"])){
            session()->put('loggedIn',1);
            session()->put('userid',$userid[0]);
            return redirect('admin');
        }else{
            return redirect()->back();
        }
    }
    public function logout(){
        
        Auth::logout();
        return redirect('login');
    }
    public function forgotpassword(Request $request){
        $result=$request->get('email');
		//dd($result);
        $obj=DB::select("select * from users where email='$result' AND role='admin'");
                    $confirmation_code = str_random(30);
        //dd($obj);
       if(!empty($obj)){
            $to=$result;
            $subject="Forget Password";
            $from = 'noreply@newsportal.com';
            $body="Hi,<br><br>Click here to reset your password {{ URL::to('resetform' . $confirmation_code) }}   <br/> <br/>";
            $headers = "From: " .$from ;
          //  $headers .= "Reply-To: ". strip_tags($from) . "\r\n";
            //$headers .= "MIME-Version: 1.0\r\n";
            //$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
 
            mail($to,$subject,$body,$headers);
           return view('admin/logfile/reset_email_sent',array('res'=>$obj));
        }else{
            echo "Email doesnot exist.";
        }
    }
    public function resetpasswordform(){
    	return view('admin/logfile/reset_password');
    }

}
