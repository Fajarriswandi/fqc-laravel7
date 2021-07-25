<!-- menggunakan kerangka dari halaman master.blade.php -->
@extends('artikel.master')

<!-- membuat komponen title sebagai judul halaman -->
@section('title', 'News & Info')

    <!-- membuat header dan tombol tambah artikel di atas -->
@section('header')
    <div class="ml-auto mr-auto d-table text-center">
        <h2>News & Info</h2>
        <a href="/add"><button class="btn btn-success">Tambah Artikel</button></a>
    </div>
    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); 
        document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
    
@endsection

<!-- membuat komponen main yang berisi form untuk mengisi judul dan isi artikel -->
@section('main')
    @foreach ($articles as $article)
        <div class="col-md-4 col-sm-12 mt-4">
            <div class="card">
                <img src="{{url('/images/', $article->image) }}" class="card-img-top" alt="gambar">
                <div class="card-body">
                    <h5 class="card-title">{{ $article->judul }}</h5>
                    @php
                        $showArtikel = $article->deskripsi;
                        echo html_entity_decode($showArtikel);
                    @endphp
                    <a href="/news-info/{{ $article->slug }}" class="btn btn-primary">Baca Artikel</a>
                </div>
            </div>
        </div>
    @endforeach
@endsection
