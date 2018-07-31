<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\User;
class AuthController extends Controller
{












public function getSignup()
{


return view('Auth.signup');

}



public function postSignup( Request $request)
{

$this->validate($request,[
'email'=>'required|unique:users|email|max:225',
'name'=>'required|unique:users|max:20:alpha',
'password'=>'required|min:6',
]);

$user=new User;
$user->email=$request->input('email');
$user->name=$request->input('name');
$user->password=bcrypt($request->input('password'));
$user->save();
return redirect('created')->with('success','You are Registered now and login to your account !');
}



public function getSignin()
{

return view('auth.sigin');

}

public function postSignin( Request $request)
{

$this->validate($request,[
'email'=>'required',
'password'=>'required',
]);
if(!Auth::attempt($request->only(['email','password']),$request->has('remember')))
{
return redirect()->back()->with('error','could not sigin you with These Detailes');
}


else{

return redirect()->route('timeline')->with('info','you are sigin');
}

}

public function getSignout()
{
Auth::logout();
return redirect()->route('login');

}







}
