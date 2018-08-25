<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Status;
class PagesController extends Controller
{

// public function __construct()
// {
//     $this->middleware('auth', ['except'=>'index']);
// }


/* Displays the index Controller */

public function index()
{
if(Auth::check())
{
$status=Status::where( function( $query)
{
return $query->where('user_id', Auth::user()->id)
->orWhereIn('user_id', Auth::user()->friends()->pluck('id'));

})->orderBy('created_at','desc')->paginate();
// dd($status);
// $name=Auth::user()->getUserName();
return view('pages.timeline')->with('statuses',$status);

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
