<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Vendor;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;

class LoginsController extends Controller
{

    /**
	 * Handles authentication attempt
	 *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
    */
    public function login(){
        return view('login');
    }

    public function register(){
        return view('register');
    }
    public function auth(Request $request){

    	$email = $request->input('email');

        $password = $request->input('password');

    	if (Auth::attempt(['email' => $email, 'password' => $password])){

            $user = Auth::user();

            return redirect('/');
        }else{		
                Session::flash('error', 'Authentication failed. Kindly try again with valid details');
                return back();
        }
    }

    public function registerPost(Request $request){

        $email = $request->input('email');
        $name = $request->input('name');
        $password = $request->input('password');
        $password1 = $request->input('password1');
        if($password != $password1){
            Session::flash('error', 'Sorry! Password mismatch');
            return back();
        }

        $user = new User;
        $user->name = $name;
        $user->email = $email;
        $user->password = bcrypt($password);

    	if($user->save()){
            Auth::loginUsingId($user->id);
            return redirect('/');
        }else{		
                Session::flash('error', 'Authentication failed. Kindly try again with valid details');
                return back();
        }
    }

    public function mobileAuth(Request $request){
        $deviceId = $request->input('deviceId');
        $user = User::where("deviceId", $deviceId)->first();
        if(!empty($user)){
            return response()->json(['success' => true, 'user'=> $user],200);
        }else{
            return response()->json(['error' => true, 'message'=> "Authentication failed"],200);
        }
    }

    
    public function logout(){
    	Auth::logout();
        return redirect('/');
    }
}
