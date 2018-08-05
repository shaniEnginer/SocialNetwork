<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
class SearchController extends Controller
{
// public function __construct()
// {
//     $this->middleware('auth');
// }



public function GetSearchResult( Request $request)
{
$query=$request->input('query');
if($query==null)
{

return redirect()->route('home');
}
$users=User::where(DB::raw("CONCAT(name)"),'LIKE',"%{$query}%")->get();
return view('search.result')->with('users',$users);

}




}
