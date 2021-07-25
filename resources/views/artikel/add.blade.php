@extends('layouts.adminLayout')

<!-- membuat komponen title sebagai judul halaman -->
@section('title', 'Add New Article - Admin')

    <!-- membuat komponen main yang berisi form untuk mengisi judul dan isi artikel -->
@section('main')

    {{-- MAIN CONTENT --}}
    <div class="col-md-8 col-sm-12 bg-white p-4">
        <form method="post" action="/add_process" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Judul Artikel</label>
                <input type="text" class="form-control" name="judul" placeholder="Judul artikel">
            </div>
            <div class="form-group">
                <label>Isi Artikel</label>
                <textarea id="textEditor" class="form-control textEditor" name="deskripsi" rows="15"></textarea>
            </div>
            <div class="form-group">
                <label>Masukan Gambar</label>
                <input type="file" name="image" class="form-control">
            </div>
    </div>

    {{-- SIDEBAR --}}
    <div class="col-md-2 col-sm-12 bg-white p-2" style="height:120px !important">
        <div class="form-group">
            <label>Upload</label>
            <input type="submit" class="form-control btn btn-primary" value="Upload">
        </div>
    </div>
@endsection
</form>
