@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <h1>{{ $post->title }}</h1>
                <h4>{{ $post->author }}</h4>
                <h6>{{ $post->created_at }}</h6>
                <img src="{{ $post->img_url }}" class="img-fluid rounded-start" alt="{{ $post->title }}">

                <p class="py-3">{{ $post->content }}</p>
            </div>
        </div>
    </div>
@endsection