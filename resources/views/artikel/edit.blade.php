@extends('layouts.adminLayout')

<!-- membuat judul bernama 'Edit Artikel' pada tab bar -->
@section('title', 'Edit Artikel')


@section('main')
    <div class="col-md-8 col-sm-12 pt-3 pr-0 pb-3 pl-3">
        <div class="card p-4">
            <h2>Edit Artikel</h2>
            <form method="post" action="/edit_process" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="{{ $article->id }}" name="id">
                <div class="form-group">
                    <input type="text" class="form-control" value="{{ $article->judul }}" name="judul"
                        placeholder="Judul artikel">
    
                </div>
                <div class="form-group">
                    <textarea id="deskripsi" class="form-control" name="deskripsi" rows="15">{{ $article->deskripsi }}</textarea>
                </div>
    
                <img src={{ url('images/', $article->image) }} class="img-fluid" width="50" height="40" />
                {{ $article->image }}
                <div class="form-group">
                    <label>Masukan Gambar</label>
                    <input type="file" id="image" name="image" class="form-control" value="{{ $article->image }}">
                </div>
        </div>
        
    </div>

    <div class="col-md-2 col-sm-12 pt-3">
        <div class="card p-4">
            <input type="submit" class="form-control btn btn-primary" value="Update">
        </div>
    </div>
@endsection

    </form>
