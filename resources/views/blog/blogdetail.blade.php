@extends('layouts.frontendLayout')

@section('title')
    {{ $article->judul }} - Fajr Quran Centre (FQC)
@endsection

@section('content')
<div id="blog" class="mainContent">
    <div class="container">
        <br><br><br><br><br><br>
        <img src="{{URL::to('/')}}/images/{{ $article->image }}" alt=""> <br> <br>
        
        <h1>{{ $article->judul }}</h1>
        {{ date('d M Y H:i:s', strtotime($article->created_at))  }}
        <br>
        {{ $article->deskripsi }}
    </div>
</div>
    
@endsection