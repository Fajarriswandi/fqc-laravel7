<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session; // Dibutuhkan dalam mengedit data
use Auth; // Untuk authentication / membatasi akses halaman admin
use Illuminate\Support\Str;
use Carbon\Carbon;

class UserController extends Controller
{
    public function __construct()
    {
        // $this->middleware(['auth','verified']);
        $this->middleware(['auth']);
    }

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
            $role_users = DB::table('role_users')->orderby('user_id', 'desc')->get();
            $users = DB::table('users')->orderby('id', 'desc')->get();
            return view('user.index', compact('users','role_users'));
        } else {
            return redirect('/profile');
        }
    }

    public function profile()
    {
        if (request()->user()->hasRole('user')) {
            return view('user.profile');
        } else {
            return redirect('/');
        } 
    }

   

}
