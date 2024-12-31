@extends('front.layout.template')

@push('meta-seo')
    <meta name="author" content="{{ $article -> User -> name }}"/>
    <meta name="description" value="{{ Str::limit(strip_tags($article->desc), 150, '...') }}">
    <meta name="keyword" value="{{ $article->title. ' - Laravel' }}">
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="{{ $article->title. ' - Laravel' }}"/>
    <meta peroperty="og:url" value="{{ url()->current() }}" />
    <meta peroperty="og:site_name" content="BlogLaravel" />
    <meta property="og:description" value="{{ Str::limit(strip_tags($article->desc), 150, '...') }}">
    <meta property="og:image" value="{{ asset('storage/back/'. $article->img) }}">
@endpush

@section('title', $article->title. ' - Laravel')

@section('content')
<div class="container">
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-8" data-aos="fade-up">
            <!-- Featured blog post-->
            <div class="card mb-4 shadow-sm">
                <a href="{{ url('p/'. $article->slug) }}">
                    <img class="card-img-top single-img" src="{{ asset('storage/back/'. $article->img) }}" alt="{{ $article->title }}" /></a>
                <div class="card-body bg-dark">
                    <div class="small text-muted">
                       <span class="ml-2"> {{ $article->created_at->format('d-m-Y') }}</span>
                       <span class="ml-2">
                        | {{ $article->User->name }}
                        <a href="{{ url('category/'.$article->Category->slug) }}">{{ $article->Category->name }}</a>
                       </span>
                       <span class="ml-2"> {{ $article->views }}x</span>
                    </div>
                    <h1 class="card-title">{{ $article->title }}</h1>
                    <p class="card-text" style="color: white">
                     {!! $article->desc !!}
                    </p>

                    <div class="mt-5">
                        <p style="front-size: 20px"><b>Share This</b></p>
                        <a class="btn btn-primary" href="https://www.facebook.com/sharer.php?u={{ url()->current() }}" target="_blank"><i class="fab fa-facebook"></i> Facebook</a>
                        <a class="btn btn-danger" href="https://api.whatsapp.com/send?text={{ url()->current() }}" target="_blank"><i class="fab fa-whatsapp"></i> WhatsApp</a>
                    </div>
                </div>
            </div>
        </div>
        @include('front.layout.side-widget')
    </div>
</div>
@endsection

