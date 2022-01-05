@extends('main')

@section('content')
    <h2>{{ $post->id }}. {{ $post->title }}</h2>
    <p>{{ $post->content }}</p>
    <div class="d-flex">
        <div class="col">
            <a href="{{ route('post.index') }}" role="button"  class="btn btn-dark">Back</a>
        </div>
    </div>
@endsection
