<div class="col-lg-4" data-aos="fade-left">
    <!-- Search widget-->
    <div class="card mb-4 shadow-sm bg-dark">
        <div class="card-header" style="color: white;">Search</div>
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
    <div class="card mb-4 shadow-sm bg-dark">
        <div class="card-header" style="color: white;">Categories</div>
        <div class="card-body">
                <div>
                        @foreach ($categories as $item)
                            <span><a href="{{ url('category/'.$item->slug) }}" class="bg-primary badge text-white unstyle-category">
                                {{ $item->name }} ({{ $item->articles_count}})</a></span>
                        @endforeach
                </div>
                </div>
    </div>

        <!-- populer post -->
        <div class="card mb-4 shadow-sm bg-dark">
            <div class="card-header" style="color: white;">Popular Posts</div>
            <div class="card-body">
                @foreach ($popular_post as $item)
                    <div class="card mb-3 bg-dark">
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
