@extends('artikel.master')

<!-- membuat judul bernama 'Edit Artikel' pada tab bar -->
@section('title', 'Edit Artikel')

@section('header')
    <center class="mt-4">
        <h2>Edit Artikel</h2>
    </center>
@endsection

@section('main')
    <div class="col-md-8 col-sm-12 bg-white p-4">
        <form method="post" action="/edit_process" enctype="multipart/form-data">
            @csrf
            <input type="hidden" value="{{ $article->id }}" name="id">
            <div class="form-group">
                <label>Judul Artikel</label>
                <input type="text" class="form-control" value="{{ $article->judul }}" name="judul"
                    placeholder="Judul artikel">

            </div>
            <div class="form-group">
                <label>Isi Artikel</label>
                <textarea id="textEditor" class="form-control" name="deskripsi" rows="15">{{ $article->deskripsi }}
                        </textarea>
            </div>

            <img src={{ url('images/', $article->image) }} class="img-fluid" width="50" height="40" />
            {{ $article->image }}
            <div class="form-group">
                <label>Masukan Gambar</label>
                <input type="file" id="image" name="image" class="form-control" value="{{ $article->image }}">
            </div>
    </div>
@endsection

<!-- membuat komponen sidebar yang berisi tombol untuk upload artikel -->
@section('sidebar')
    <div class="col-md-3 ml-md-5 col-sm-12 bg-white p-4" style="height:120px !important
                <div class=" form-group">
        <label>Edit</label>
        <input type="submit" class="form-control btn btn-primary" value="Edit">
    </div>
    </div>
    </form>
@endsection
