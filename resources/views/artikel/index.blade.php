@extends('layouts.adminLayout')

{{-- PAGE TITLE --}}
@section('title', 'Admin - Articles')

    {{-- MAIN CONTENT --}}
@section('main')
    <div class="col-md-10 col-sm-12">
        {{-- ALERT SUCCESS --}}
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif

        {{-- ALERT DANGER --}}
        @if ($message = Session::get('danger'))
            <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif

        <div class="card mt-4">
            <div class="card-body">
                <h2>Manage Articles</h2>
                <a href="/add"><button class="btn btn-primary mb-3">Tambah Artikel</button></a>

                <table class="table table-sm table-striped table-responsive table-bordered table-hover table-stripped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Judul</th>
                            <th>Slug</th>
                            {{-- <th>Deskripsi</th> --}}
                            <th>Image</th>
                            <th>Created at</th>
                            <th>Updated at</th>
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
                                {{-- <td>{{ $article->deskripsi }}</td> --}}
                                <td>{{ $article->image }}</td>
                                <td>{{ $article->created_at }}</td>
                                <td>{{ $article->updated_at }}</td>
                                <td><a href="/blog/{{ $article->slug }}" class="btn btn-primary">Show</a>
                                </td>
                                <td>
                                    <a href="/edit/{{ $article->id }}"><button class="btn btn-success">Edit</button></a>
                                    <a onclick="return confirm('Are you sure?')"
                                        href="/delete/{{ $article->id }}"><button
                                            class="btn btn-danger">Hapus</button></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
