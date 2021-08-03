<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session; // Dibutuhkan dalam mengedit data
use Auth; // Untuk authentication / membatasi akses halaman admin
use Illuminate\Support\Str;

class ArtikelController extends Controller
{

    public function __construct()
    {
      $this->middleware('auth'); // Authentication middleware
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

    // Fungsi menampilkan semua list artikel
    public function show(Request $request)
    {
        if ($request->user()->hasRole('admin')){
            $articles = DB::table('artikel')->orderby('id', 'desc')->get();
            return view('artikel.show', ['articles'=>$articles]);
        }
        return redirect('/');
        
    }

    // Fungsi menampilkan halaman create artikel
    public function add(Request $request)
    {
        
        if($request->user()->hasRole('admin'))
        {
            return view('artikel.add');
        }
 
        else
        {
           return redirect('/');
        }
    }

    // Fungsi simpan / post artikel dalam form action
    public function add_process(Request $article)
    {
        DB::table('artikel')->insert([
            'slug' => Str::slug($article->judul, '-'),
            'judul'=>$article->judul,
            'deskripsi'=>$article->deskripsi,
            'image' => time().'.'.$article->image->extension(), // Untuk memasukan nama dan extentionnya ke dalam database (Ex: gambar.jpg;)
        ]);

        // Validasi format gambar
        $article->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Simpan gambar di folder
        $imageName = time().'.'.$article->image->extension(); // Memformat nama gambar dengan extention, tidak di masukan di database, hanya untuk rename nama gambar untuk di upload
        $article->image->move(public_path('images'), $imageName); // Menyimpan gambar yang di upload kedalam folder Image yang ada di Public
        
        Session::flash('success', 'Data berhasil tambahkan!');
        return redirect()->action('ArtikelController@show_by_admin');
    }

    // Fungsi show detail artikel
    public function detail($slug){
        $article = DB::table('artikel')->where('slug', $slug)->first();
        return view('artikel.detail', ['article'=>$article]);
    }

    public function index(Request $request)
    {
  
        if ($request->user()->hasRole('user')) {
            return redirect('user');
        }

        if ($request->user()->hasRole('admin')){
            $articles = DB::table('artikel')->orderby('id', 'desc')->get();
            return view('artikel.index', ['articles'=>$articles]);
        }
 
    }


    // Fungsi edit artikel
    public function edit($id)
    {
        if($this->is_login())
        {
            $article = DB::table('artikel')->where('id', $id)->first();
            return view('artikel.edit', ['article'=>$article]);
        }
 
        else
        {
           return redirect('/login');
        }
    }

    // Fungsi edit proses pada form action
    public function edit_process(Request $article)
    {
        // Kondisi kalau gambarnya ada!
        if($article->image != ''){
            $id = $article->id;
            $slug = $article->slug;
            $judul = $article->judul;
            $deskripsi = $article->deskripsi;
            // $image = $article->image;

            DB::table('artikel')->where('id', $id)
                                ->update([
                                    'slug' => Str::slug($article->judul, '-'),
                                    'judul' => $judul, 
                                    'deskripsi' => $deskripsi,
                                    'image' => time().'.'.$article->image->extension(),
                                ]);

            $imageName = time().'.'.$article->image->extension();
            $article->image->move(public_path('images'), $imageName);
        }

        $id = $article->id;
        $slug = $article->slug;
        $judul = $article->judul;
        $deskripsi = $article->deskripsi;
        DB::table('artikel')->where('id', $id)
                                ->update([
                                    'slug' => Str::slug($article->judul, '-'),
                                    'judul' => $judul, 
                                    'deskripsi' => $deskripsi,
                                ]);




        Session::flash('success', 'Data berhasil di update!');
        return redirect()->action('ArtikelController@show_by_admin');
    }

    // Fungsi untuk menghapus data
    public function delete($id)
    {
        if($this->is_login())
        {
             //menghapus artikel dengan ID sesuai pada URL
            DB::table('artikel')->where('id', $id)
                                ->delete();
 
            //membuat pesan yang akan ditampilkan ketika artikel berhasil dihapus
            Session::flash('danger', 'Artikel berhasil dihapus');
            return redirect()->action('ArtikelController@show_by_admin');
        }
 
        else
        {
           return redirect('/login');
        }
    }

}
