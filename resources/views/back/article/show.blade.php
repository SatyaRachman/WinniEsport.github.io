@extends('back.layout.template')

@section('title', 'Detail Article - admin')

@section('content')
    {{-- body --}}
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mb-5">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Detail Article</h1>
        </div>
          <div class="mt-3">
            @if (session('success'))
            <div class="my-3">
              <div class="alert alert-success">
                {{ session('success') }}
              </div>
            </div>
            @endif

            <table class="table table-striped table-bordered">
                <tr>
                    <th width="200px">Title</th>
                    <td>: {{ $article->title }}</td>
                </tr>

                <tr>
                    <th>Category</th>
                    <td>: {{ $article->Category->name }}</td>
                </tr>

                <tr>
                    <th>Description</th>
                    <td>: {!! $article->desc !!}</td>
                </tr>

                <tr>
                    <th>Image</th>
                    <td>
                      <a href="{{ asset('storage/back/' .$article->img) }}" target="_blank" rel="noopener noreferrer">
                        <img src="{{ asset('storage/back/' .$article->img) }}" alt="" width="50%">
                      </a>
                      </td>
                </tr>

                <tr>
                  <th>Views</th>
                  <td>: {{ $article->views }}</td>
              </tr>

              <tr>
                <th>Status</th>
                @if ($article->status == 1)
                <td>: <span class="bagde bg-success">Published</span></td>
                @else
                <td>: <span class="bagde bg-danger">Private</span></td>
                @endif
            </tr>

            <tr>
              <th>Published Date</th>
              <td>: {{ $article->publish_date }}</td>
          </tr>

          <tr>
            <th>Writer</th>
            <td>: {{ $article->User->name }}</td>
        </tr>
            </table>

            <div class="float-end">
              <a href="{{ url('article') }}" class="btn btn-secondary">Back</a>
            </div>
          </div>
      </main>
@endsection