@extends('layouts.frontendLayout')

@section('title')
    {{ $article->judul }} - Fajr Quran Centre (FQC)
@endsection

@section('content')
    <div id="blog" class="mainContent">
        <header>
            <div>
                <h1>{{ $article->judul }}</h1>
                <ul class="breadcrumb">
                    <li><a href="{{ URL::to('/') }}/">Home</a></li>
                    <li><a href="{{ URL::to('/') }}/blog">Blog</a></li>
                </ul>
            </div>
        </header>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 mb-4">
                    <div class="card cardArticle">
                        <img src="{{ URL::to('/') }}/images/{{ $article->image }}" alt="" class="featureImage">
                        <div class="card-body">
                            <h3>{{ $article->judul }}</h3>
                            <p><span class="badge badge-pill pl-0"><i class="bi bi-calendar4-week"></i>
                                    {{ date('d M Y H:i', strtotime($article->created_at)) }}</span></p>

                            @php
                                $showArtikel = $article->deskripsi;
                                echo html_entity_decode($showArtikel);
                            @endphp
                        </div>
                    </div>
                </div>
                {{-- Sidebar --}}
                <div class="col-md-4 col-sm-12 mb-4">
                    <div class="card upgradeTopPremium">
                        <div class="card-body">
                            <img src="{{ URL::to('/') }}/themeImages/upgradeToPremium.svg" alt=""
                                class="img-fluid mb-3 ml-auto mr-auto d-table" />
                            <h4>Education <strong>Investment</strong></h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, sapiente iusto expedita
                                voluptatum quisquam.</p>
                            <ul class="mb-3">
                                <li><i class="bi bi-check-circle text-success"></i> Native speakers <i class="bi bi-info-circle" data-toggle="popover" data-trigger="hover" data-placement="bottom"
                                    title="Native Speaker are"
                                    data-content="If you study Arabic or Al Qur'an, the teacher is a native Arab. If you learn French, the teacher is French. etc"></i></li>
                                <li><i class="bi bi-check-circle text-success"></i> Qualified teacher</li>
                                <li><i class="bi bi-check-circle text-success"></i> Flexible schedule</li>
                                <li><i class="bi bi-check-circle text-success"></i> Exclusive class</li>
                                <li><i class="bi bi-check-circle text-success"></i> Max 3 students per class</li>
                                <li><i class="bi bi-check-circle text-success"></i> An affordable price</li>
                                <li><i class="bi bi-check-circle text-success"></i> Full support admin</li>
                                
                                
                                
                                
                                
                            </ul>
                            <a href="{{ URL::to('/') }}/register" class="btn btn-primary btn-block">Register</a>
                            <a href="{{ URL::to('/') }}/register" class="btn btn-link btn-block">Free trial</a>
                        </div>
                    </div>
                </div>
                {{-- Sidebar --}}
            </div>
        </div>
    </div>

@endsection
