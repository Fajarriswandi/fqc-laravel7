<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session; // Dibutuhkan dalam mengedit data
use Auth; // Untuk authentication / membatasi akses halaman admin
use Illuminate\Support\Str;

class AdminDashboardController extends Controller
{

    // Fungsi untuk mengecek Auth login
    private function is_login()
    {
        if(Auth::user()) {
            return true;
        }
        else {
            return false;
        }
    }
 
    public function index()
    {

        if (request()->user()->hasRole('admin')) {
            return view('admin.index');
        } else {
            return redirect('/');
        }
        
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

   
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

  
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
