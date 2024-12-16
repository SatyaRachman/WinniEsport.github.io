@extends('front.layout.template')

@push('meta-seo')
    <meta name="description" value="Category Blog Laravel, seputar E-sport">
    <meta name="keyword" value="category BlogLaravel, kategori Blog Laravel">
    <meta property="og:title" content="Category  {{$category . "- Laravel"}}"/>
    <meta peroperty="og:url" value="{{ url()->current() }}" />
    <meta peroperty="og:site_name" content="BlogLaravel" />
    <meta property="og:description" value="Category BlogLaravel, Seputar informasi E-sports ">
    <meta property="og:image" value="https://winnicode.com/mazer/images/banner-logo.png">
@endpush

@section('title', 'Category '. $category. ' - Laravel')

@section('content')
<div class="container">
    <div class="mb-3">
        <form action="{{ route('search') }}" method="POST">
            @csrf
                <div class="input-group">
                    <input class="form-control" type="text" name="keyword" placeholder="Search articles..."/>
                    <button class="btn btn-primary" id="button-search" type="submit">Submit</button>
                </div>
        </form>
    </div>


    <p>Showing Articles with Category : <b> {{ $category }} </b></p>

    <div class="row">
                @forelse ($articles as $item)
                <div class="col-lg-4" data-aos="fade-up">
                <div class="card mb-4 shadow-mb">
                    <a href="{{ url('p/'. $item->slug) }}"><img class="card-img-top post-img" src="{{ asset('storage/back/'. $item->img) }}" alt="..." /></a>
                    <div class="card-body card-height">
                        <div class="small text-muted">
                            {{ $item->created_at->format('d-m-Y') }}  | {{ $item->User->name }}
                            <a href="{{ url('category/'.$item->Category->slug) }}">{{ $item->Category->name }}</a>
                        </div>
                        <h2 class="card-title h4">{{ $item->title }}</h2>
                        <p class="card-text">{{ Str::limit(strip_tags($item->desc), 100, '...') }}</p>
                        <a class="btn btn-primary" href="{{ url('p/'. $item->slug) }}">Read more →</a>
                    </div>
                </div>
                </div>
                @empty
                <h3>Not Found</h3>
                @endforelse
            </div>

            {{ $articles->links() }}
        </div>
    </div>
</div>
@endsection

