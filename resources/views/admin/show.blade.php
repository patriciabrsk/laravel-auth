@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>{{ $post->title }}</h1>
                <img src="{{ $post->img_url }}" class="img-fluid rounded-start" alt="{{ $post->title }}>
            </div>
        </div>
    </div>
@endsection