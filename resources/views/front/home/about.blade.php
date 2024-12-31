@extends('front.layout.template')

@push('meta-seo')
    <meta name="description" value="Tentang WinniEsport, seputar E-sport">
    <meta name="keyword" value="tentang BlogLaravel, tentang WinniEsport, apa itu E-sports">
    <meta property="og:title" content="Tentang WinniEsport">
    <meta peroperty="og:url" value="{{ url()->current() }}" />
    <meta peroperty="og:site_name" content="WinniEsport" />
    <meta property="og:description" value="Tentang WinniEsport, Seputar informasi E-sports ">
    <meta property="og:image" value="https://winnicode.com/mazer/images/banner-logo.png">
@endpush

@section('title', 'Tentang WinniEsport ')

@section('content')
<div class="container">
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-8">
            <!-- Featured blog post-->
            <div class="card mb-4 shadow" data-aos="zoom-out">
                <a href="{{ asset('') }}">
                    <img class="card-img-top featured-img"
                    src="{{ asset('front/img/WinniE.png') }}"
                    alt="Foto About"/>
                </a>
                <div class="card-body">
                    <div class="small text-muted">{{ date('d/m/Y') }}</div>
                    <h2 class="card-title">Tentang WinniEsport</h2>
                    <p class="card-text">
                       <p>
                        Selamat datang di WinniEsports, website informasi seputar dunia Mobile Legends!
Kami hadir untuk memberikan berita terkini, analisis mendalam, dan semua hal menarik tentang game Mobile Legends. Mulai dari turnamen besar, berita tim dan pemain profesional, hingga update terbaru dalam game, kami hadir untuk menginformasikan setiap perkembangan yang terjadi. Dengan tim yang berfokus pada eSports Mobile Legends, kami berkomitmen untuk menjadi sumber terpercaya bagi para penggemar, pemain, dan komunitas Mobile Legends di Indonesia.
                       </p>

                       <p>
                        Lebih dari sekadar berita, WinniEsport adalah tempat berkumpulnya komunitas Mobile Legends.
Kami mengundang semua penggemar untuk berbagi pendapat, tips, dan pengalaman seputar Mobile Legends. Dengan berbagai artikel, panduan gameplay, dan analisis kompetitif.
                       </p>
                    </p>
                </div>
            </div>

        </div>

        @include('front.layout.side-widget')
    </div>
</div>
@endsection

