@extends('main')

@section('content')
    <h2>{{ $post->id }}. {{ $post->title }}</h2>
    <p>{{ $post->content }}</p>
    <img class="mb-3" src="{{$post->image}}" alt="{{ $post->title }}">
    <p>Tags</p>
    <p>
    @foreach($post->tags as $tag)
        {{ $tag->title }}@if( $loop->iteration != count($post->tags) ), @endif
    @endforeach
    </p>
    <p>Category: {{ $category_title }}</p>
    <div class="d-flex">
        <div class="col">
            <a href="{{ route('post.index') }}" role="button"  class="btn btn-dark">Back</a>
        </div>
    </div>
@endsection
