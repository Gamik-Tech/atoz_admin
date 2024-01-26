<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function home()
    {

      return view('home');

      // if (session()->has('api_token')) 
      // {
      //    return view('home');
      // }
      // else
      // {
      //    return view('signin');
      // }
    }
    public function master()
    {
       return view('master');
    }
    public function signin()
    {
       return view('signin');
    }
    
}
