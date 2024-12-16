@extends('front.layout.template')

@push('meta-seo')
    <meta name="description" value="All Category Blog Laravel, seputar E-sport">
    <meta name="keyword" value="list category BlogLaravel, daftar kategori Blog Laravel">
    <meta property="og:title" content="All Category"/>
    <meta peroperty="og:url" value="{{ url()->current() }}" />
    <meta peroperty="og:site_name" content="BlogLaravel" />
    <meta property="og:description" value="All Category Blog Laravel, seputar E-sport">
    <meta property="og:image" value="https://winnicode.com/mazer/images/banner-logo.png">
@endpush

@section('title', 'All Category')

@section('content')
<div class="container">


    <p>Showing All Articles with Category </b></p>

    <div class="row">
              @foreach ($category as $item)
              <div class="col-lg-3 mb-3">
                <div class="card shadow">
                <div class="card-body">
                    <div class="text-center">
                        <span>
                            <a href="{{ url('category/' .$item->slug) }}" class="text-decoration-none text-dark">
                            <i class="fas fa-folder fa-5x"></i>
                        </a>
                        </span>
                        <h5 class="card-title mt-2">
                           <a href="{{ url('category/' .$item->slug) }}" class="text-decoration-none text-dark">
                            {{ $item->name }} ({{ $item->articles_count }})
                           </a>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
              @endforeach
            </div>

        {{--   {{ $articles->links() }}  --}}
        </div>
    </div>
</div>
@endsection

