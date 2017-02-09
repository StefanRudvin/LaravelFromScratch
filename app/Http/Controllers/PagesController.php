<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class PagesController extends Controller
{
    //

    public function test()
    {
        //code
        #Session::flash('status', 'Hello There from somewhere else mate');
        #session(['foo' => 'bar']);
        # same as
        #Session::put('foo', 'bar');

        # Session::get('foo');

        session()->flash('status', 'Here is my status.');
        session()->flash('flash_message', 'This is a flash message!');


        return redirect('/');
    }
    public function home()
    {
    	$people = ['Taylor','Matt','Jeffrey'];

    	return view('welcome', compact('people'));
    }

    public function about()
    {
    	return view('pages.about');
    }
    
}
