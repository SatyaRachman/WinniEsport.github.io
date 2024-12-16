@extends('front.layout.template')

@push('meta-seo')
    <meta name="description" value="About Blog Laravel, seputar E-sport">
    <meta name="keyword" value="about BlogLaravel, tentang Blog Laravel, apa itu E-sports">
    <meta property="og:title" content="About Laravel">
    <meta peroperty="og:url" value="{{ url()->current() }}" />
    <meta peroperty="og:site_name" content="BlogLaravel" />
    <meta property="og:description" value="About BlogLaravel, Seputar informasi E-sports ">
    <meta property="og:image" value="https://winnicode.com/mazer/images/banner-logo.png">
@endpush

@section('title', 'About Laravel')

@section('content')
<div class="container">
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-8">
            <!-- Featured blog post-->
            <div class="card mb-4 shadow" data-aos="zoom-out">
                <a href="{{ asset('') }}">
                    <img class="card-img-top featured-img" src="" alt="Foto About" /></a>
                <div class="card-body">
                    <div class="small text-muted">{{ date('d/m/Y') }}</div>
                    <h2 class="card-title">About Blog</h2>
                    <p class="card-text">
                       <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Nam, reprehenderit numquam! Architecto alias autem eveniet delectus officiis dolore nisi! Veritatis,
                        saepe aperiam. Amet fugit cumque quaerat minus quidem consectetur reprehenderit.
                       </p>

                       <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Quia harum at quaerat beatae nisi autem deserunt voluptates aperiam enim illo,
                        fugit possimus optio a in magnam, molestiae architecto id ut.
                       </p>
                    </p>
                </div>
            </div>

        </div>

        @include('front.layout.side-widget')
    </div>
</div>
@endsection

