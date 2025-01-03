@extends('front.layout.template')

@push('meta-seo')
    <meta name="description" value="Blog Laravel, seputar E-sport">
    <meta name="keyword" value="BlogLaravel, Blog Laravel">
    <meta property="og:title" content="BlogLaravel">
    <meta peroperty="og:url" value="{{ url()->current() }}" />
    <meta peroperty="og:site_name" content="BlogLaravel" />
    <meta property="og:description" value="BlogLaravel, Blog Laravel">
    <meta property="og:image" value="{{ asset('storage/back/'. $latest_post->img) }}">
@endpush

@section('title', 'WinniEsport site')

@section('content')
<div class="container">
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-8">
            <!-- Featured blog post-->
            <div class="card mb-4 shadow" data-aos="fade-right">
                <a href="{{ url('p/'. $latest_post->slug) }}">
                    <img class="card-img-top featured-img" src="{{ asset('storage/back/'. $latest_post->img) }}" alt="..." /></a>
                <div class="card-body bg-dark">
                    <div class="small text-muted">{{ $latest_post->created_at->format('d-m-Y') }}
                        | {{ $latest_post->User->name }} |  <a href="{{ url('category/'.$latest_post->Category->slug) }}">{{ $latest_post->Category->name }}</a>
                    </div>
                    <h2 class="card-title">{{ $latest_post->title }}</h2>
                    <p class="card-text" style="color: white">
                     {{ Str::limit(strip_tags($latest_post->desc), 100, '...') }}
                    </p>
                    <a class="btn btn-primary" href="{{ url('p/'. $latest_post->slug) }}">Read more →</a>
                </div>
            </div>
            <!-- Nested row for non-featured blog posts-->
            <div class="row">
                @foreach ($articles as $item)
                <div class="col-lg-6" data-aos="fade-up">
                    <!-- Blog post-->
                    <div class="card mb-4 bg-dark">
                        <a href="{{ url('p/'. $item->slug) }}"><img class="card-img-top post-img" src="{{ asset('storage/back/'. $item->img) }}" alt="..." /></a>
                        <div class="card-body card-height">
                            <div class="small text-muted">
                                {{ $item->created_at->format('d-m-Y') }} | {{ $item->User->name }}
                                <a href="{{ url('category/'.$item->Category->slug) }}">{{ $item->Category->name }}</a>
                            </div>
                            <h2 class="card-title h4">{{ Str::limit($item->title, 50, '...') }}</h2>
                            <p class="card-text" style="color: white">{{ Str::limit(strip_tags($item->desc), 50, '...') }}</p>
                            <a class="btn btn-primary" href="{{ url('p/'. $item->slug) }}">Read more →</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="pagination justify-content-center my-4">
            {{ $articles->links() }}
            </div>
        </div>

        @include('front.layout.side-widget')
    </div>
</div>
@endsection

