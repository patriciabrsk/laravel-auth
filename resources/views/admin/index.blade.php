@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row row-cols-3 row-cols-md-2 g-4">
            @forelse ($posts as $post)
                <div class="col">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="..." class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <a href="{{ route('admin.posts.show', $post)}}"></a>
                                    <h5 class="card-title">C{{ $post->title }}</h5>
                                    <h6 class="card-title">C{{ $post->title }}</h6>
                                    <p class="card-text">{{ $post->content }}</p>
                                    <p class="card-text">
                                        <small class="text-muted">{{ $post->created_at}}</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty

        </div>
    </div>
@endsection