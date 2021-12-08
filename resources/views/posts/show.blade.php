@extends('main')

@section('content')
    <h2>{{ $post->id }}. {{ $post->title }}</h2>
    <p>{{ $post->content }}</p>
    <div class="d-flex">
        <div class="col">
            <a href="{{ route('post.edit', $post->id) }}" role="button" class="btn btn-info ">Edit</a>
        </div>
        <div class="col">
            <a href="{{ route('post.index') }}" role="button"  class="btn btn-dark">Back</a>
        </div>
        <form action="{{ route('post.delete', $post->id) }}" method="post" class="col">
            @csrf
            @method('delete')
            <input type="submit" value="Delete" class="btn btn-danger">
        </form>
    </div>
@endsection
