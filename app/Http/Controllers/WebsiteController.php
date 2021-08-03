<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    // Constructor
    public function __construct()
    {
      $this->middleware('auth'); // Authentication middleware
    }

    public function index(Request $request)
    {
  
        if ($request->user()->hasRole('user')) {
            return redirect('user');
        }

        if ($request->user()->hasRole('admin')){
            return redirect('admin');
        }

        return view('homepage');

    }

}
