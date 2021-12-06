@extends('main')

@section('content')
    <h2>{{ $post->id }}. {{ $post->title }}</h2>
    <p>{{ $post->content }}</p>
    <a href="{{ route('post.edit', $post->id) }}">Edit</a>
    <a href="{{ route('post.index') }}">Back</a>
    <form action="{{ route('post.delete', $post->id) }}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="Delete" class="btn btn-danger">
    </form>
@endsection
