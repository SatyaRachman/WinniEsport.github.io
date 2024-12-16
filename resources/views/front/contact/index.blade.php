@extends('front.layout.template')

@push('meta-seo')
    <meta name="description" value="Contact Blog Laravel, seputar E-sport">
    <meta name="keyword" value="contact BlogLaravel, kontak Blog Laravel">
    <meta property="og:title" content="Contact Laravel">
    <meta peroperty="og:url" value="{{ url()->current() }}" />
    <meta peroperty="og:site_name" content="BlogLaravel" />
    <meta property="og:description" value="Contact BlogLaravel, Seputar informasi E-sports ">
    <meta property="og:image" value="https://winnicode.com/mazer/images/banner-logo.png">
@endpush

@section('title', 'Contact Laravel')

@section('content')
<div class="container">
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-8">
            <!-- Featured blog post-->
            <div class="card mb-4 shadow" data-aos="zoom-in">
                <div class="text-center">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.5321978749107!2d107.59151457410707!3d-6.946371668000885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e8bee4dde541%3A0xf5d4301ecb9a8775!2sStmik%20Mardira%2C%20Situsaeur%2C%20Kec.%20Bojongloa%20Kidul%2C%20Kota%20Bandung%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1732530130666!5m2!1sid!2sid"
                width="100%" height="450" style="border:0;" allowfullscreen=""
                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="card-body">
                    <div class="small text-muted">{{ date('d/m/Y') }}</div>
                    <h2 class="card-title">Contact Blog</h2>
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

                       <ul>
                        <li>Phone : {{ $config['phone'] }}</li>
                        <li>Email : {{ $config['email'] }}</li>
                        <li><a href="">Facebook   : {{ $config['facebook'] }}</a></li>
                        <li><a href="">Instagram  : {{ $config['instagram'] }}</a></li>
                        <li><a href="">Youtube    : {{ $config['youtube'] }}</a></li>
                       </ul>
                    </p>
                </div>
            </div>

        </div>

        @include('front.layout.side-widget')
    </div>
</div>
@endsection

