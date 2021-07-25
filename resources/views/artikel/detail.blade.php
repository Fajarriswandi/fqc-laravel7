@extends('artikel.master')

<!-- memberikan judul di tab sesuai dengan judul artikel yang sedang dibaca -->
@section('title')
    {{ $article->judul }} - Fajr Quran Centre (FQC)
@endsection

<!-- menampilkan gambar, judul, dan isi artikel -->
@section('main')
    <div class="col-md-7 col-sm-12 mb-5 bg-white p-0">
        <img src={{url('/images/', $article->image) }} class="card-img-top img-fluid" alt="gambar">
        <div class="p-4">
            <h2>Title-{{ $article->judul }}</h2>

            @php
                $showArtikel = $article->deskripsi;
                echo html_entity_decode($showArtikel);
            @endphp
        </div>
    </div>
@endsection

<!-- menampilkan tombol kembali ke halaman utama -->
@section('sidebar')
    <div class="col-md-4 offset-md-1 col-sm-12 bg-white p-4 h-100">
        <center>
            <a href="/">
                <button class="btn btn-info text-white w-100">Kembali</button>
            </a>
        </center>
    </div>
@endsection
