@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8 p-3">
            <h2>{{ $post->id }}</h2>
            <h2>{{ $post->title }}</h2>
            <h3>{{ $post->author }}</h3>
            <div class="image">
                <img src="{{ $post->image_url }}" class="img-fluid" alt="img">
            </div>
            <h4>{{ $post->creation_date}}</h4>
            <p>{{ $post->content}}</p>
        </div>
    </div>
</div>
@endsection