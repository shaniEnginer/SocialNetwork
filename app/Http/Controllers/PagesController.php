<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    /* Displays the index Controller */
public function index()
{

return view('pages.index');

}

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
