<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class friendsController extends Controller
{
public function __construct()
{
$this->middleware('auth');
}

public function getIndex()
{
$friends=Auth::user()->friends();
return view('friends.index')->with('friends',$friends);
}

public function getAdd($username)
{
dd($username);

// $user=Auth::where('name',$username)->first();
// if(!$user)
// {
// return redirect()->route('profile.show')->with('info', ' Coulde not finde That User');
// }

}

}
