@extends('artikel.master')

@section('title', 'Halaman Khusus Admin')

@section('header')
    <h2>
        <center>List Artikel</center>
    </h2>
@endsection



@section('main')
    <div class="col-md-12">
        
    </div>

    <div class="col-md-12 bg-white p-4">
        <a href="/add"><button class="btn btn-primary mb-3">Tambah Artikel</button></a>
        
        {{-- Alert success --}}
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif

        {{-- Alert danger --}}
        @if ($message = Session::get('danger'))
            <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif

        <table class="table table-responsive table-bordered table-hover table-stripped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Judul</th>
                    <th>Slug</th>
                    <th>Deskripsi</th>
                    <th>Image</th>
                    <th>View</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $i => $article)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $article->judul }}</td>
                        <td>{{ $article->slug }}</td>
                        <td>{{ $article->deskripsi }}</td>
                        <td>{{ $article->image }}</td>
                        <td><a href="/news-info/{{ $article->slug }}" class="btn btn-primary" target="_blank">Show</a></td>
                        <td>
                            <a href="/edit/{{ $article->id }}"><button class="btn btn-success">Edit</button></a>
                            <a href="/delete/{{ $article->id }}"><button class="btn btn-danger">Hapus</button></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
