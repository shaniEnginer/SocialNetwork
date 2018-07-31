<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class PagesController extends Controller
{

public function __construct()
{
    $this->middleware('auth', ['except'=>'index']);
}


/* Displays the index Controller */

public function index()
{
if(Auth::check())
{
$name=Auth::user()->getUserName();
return view('pages.timeline')->with('name',$name);

}
else 
{
    return view('pages.index');
}

}




// public function logedindex()
// {

// }

/*  */
public function Services()
{

return view('pages.Services');

}
/*  */
public function contact()
{

return view('pages.contact');

}


}
