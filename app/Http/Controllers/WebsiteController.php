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

    public function index()
    {
        return view('homepage');
    }

    // View page post data page
    public function create()
    {
        //
    }

    // Post data form action
    public function store(Request $request)
    {
        //
    }

    // Show list data
    public function show($id)
    {
        //
    }

    // View page edit data
    public function edit($id)
    {
        //
    }

    // Edit data form action
    public function update(Request $request, $id)
    {
        //
    }

    // Delete data
    public function destroy($id)
    {
        //
    }
}
