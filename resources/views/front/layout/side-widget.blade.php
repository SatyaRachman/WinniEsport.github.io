<div class="col-lg-4" data-aos="fade-left">
    <!-- Search widget-->
    <div class="card mb-4 shadow-sm">
        <div class="card-header">Search</div>
        <form action="{{ route('search') }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="input-group">
                    <input class="form-control" type="text" name="keyword" placeholder="Search articles..."/>
                    <button class="btn btn-primary" id="button-search" type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
    <!-- Categories widget-->
    <div class="card mb-4 shadow-sm">
        <div class="card-header">Categories</div>
        <div class="card-body">
                <div>
                        @foreach ($categories as $item)
                            <span><a href="{{ url('category/'.$item->slug) }}" class="bg-primary badge text-white unstyle-category">
                                {{ $item->name }} ({{ $item->articles_count}})</a></span>
                        @endforeach
                </div>
                </div>
    </div>
    <!-- Side widget-->
    <div class="card mb-4 shadow-sm">
        <div class="card-header">Side Widget</div>
        <div class="card-body">
            <a href="https://play.google.com/store/apps/details?id=com.mobile.legends&hl=en-US&pli=1" target="_blank" rel="noopener noreferrer">
                <img src="{{ $config['ads_widget'] }}" alt="ads_widget" class="img_fluid" width="80%">
            </a>
        </div>
    </div>

        <!-- populer post -->
        <div class="card mb-4 shadow-sm">
            <div class="card-header">Popular Posts</div>
            <div class="card-body">
                @foreach ($popular_post as $item)
                    <div class="card mb-3">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="{{ asset('storage/back/'. $item->img) }}" alt="{{ $item->title }}" class="img-fluid">
                            </div>

                            <div class="col-md-9">
                               <p class="card-title">
                                <a href="{{ url('p/'. $item->slug) }}">{{ $item->title }}</a>
                               </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
</div>