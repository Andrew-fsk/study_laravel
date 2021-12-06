@extends('main')
@section('content')
    <form action="{{ route('post.update', $post->id) }}" method="post">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" value="{{ $post->title }}" name="title" placeholder="Title">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" id="content" name="content" placeholder="Content" rows="3">{{ $post->content }}</textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input class="form-control" id="image" value="{{ $post->image }}" placeholder="Image" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection

