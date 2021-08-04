@extends('layouts.frontendLayout')

@section('title', 'Blog :: Fajr Quran Centre - FQC - Islamic Online Education')

@section('content')
    <div id="blog" class="mainContent">

        <header>
            <div>
                <h1>Blog</h1>
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Blog</a></li>
                </ul>
            </div>
        </header>


        <div id="listBlog" class="row">
            @foreach ($articles as $article)
                <div class="col-md-3 col-sm-12 mb-4">
                    <a href="blog/{{ $article->slug }}">
                        <div class="card">
                            <div class="image"><img class="card-img-top" src="images/{{ $article->image }}" alt="Card image cap"></div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $article->judul }}</h5>
                                <span class="badge badge-pill pl-0"><i class="bi bi-calendar4-week"></i> {{ date('d M Y', strtotime($article->created_at))  }}</span>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach


        </div>

    </div>
@endsection
