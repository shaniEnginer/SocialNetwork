<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class statusController extends Controller
{
public function status( Request $request)
{
$this->validate($request,[
'status'=>'required|max:1000'
]);
Auth::user()->status()->create([
'body'=>$request->input('status'),
]);
// dd("Akk");
return redirect()
->route('timeline')
->with('success','status Posted !');
}
}
