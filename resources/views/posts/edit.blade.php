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
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select class="form-select" name="category_id" id="category">
                @foreach($categories as $category)
                    <option {{ $category->id === $post->category_id ? 'selected' : ''}} value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="tags" class="form-label">Tags</label>
            <select class="form-select" name="tags[]" multiple aria-label="multiple select example">
                @foreach($tags as $tag)
                    <option
                        @foreach ($post->tags as $post_tag)
                            {{ $tag->id === $post_tag->id ? 'selected' : ''}}
                        @endforeach
                         value="{{ $tag->id }}">{{ $tag->title }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection

