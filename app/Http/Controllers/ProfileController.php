<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
class ProfileController extends Controller
{

public function __construct()
{
$this->middleware('auth');
}




public function index($username)
{
$user=User::where('name',$username)->first();
return view('profile.show')->with('user',$user);

if(!$user)
{
abort(404);
}
else{

}

}


public function getProfile()
{


$user=Auth::user();
return view('profile.update')->with('user',$user);

}


public function postProfile( Request $request)
{
$this->validate($request,[
'name'=>'required',
'email'=>'required',

]);
Auth::user()->update([

'name'=>$request->input('name'),
'email'=>$request->input('email'),


]);
return redirect()->route('timeline')->with('success',' Your Profile has been updated Successfully');

}


}    