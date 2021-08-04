<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FrontEndController extends Controller
{
    public function index()
    {
        return view('homepage');
    }

    public function bootstrap(){
        return view('bootstrap');
    }

    public function blog(){
        $articles = DB::table('artikel')->orderby('id', 'desc')->get();
        return view('blog.blog', compact('articles'));
    }

    public function blogdetail($slug){
        $article = DB::table('artikel')->where('slug', $slug)->first();
        return view('blog.blogdetail', ['article'=>$article]);
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
