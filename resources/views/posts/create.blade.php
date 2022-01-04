@extends('main')
@section('content')
    <form action="{{ route('post.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input
                value="{{ old('title') }}"
                type="text" class="form-control" id="title" name="title" placeholder="Title">
            @error('title')
            <p class="alert-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" id="content" name="content" placeholder="Content" rows="3">{{ old('content') }}</textarea>
            @error('content')
            <p class="alert-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input value="{{ old('image') }}" class="form-control" id="image" placeholder="Image" name="image">
            @error('image')
            <p class="alert-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select class="form-select" name="category_id" id="category">
                @foreach($categories as $category)
                    <option
                        {{ old('category_id') == $category->id ? 'selected' : '' }}
                        value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </select>
            @error('category')
            <p class="alert-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="tags" class="form-label">Tags</label>
            <select class="form-select" name="tags[]" multiple aria-label="multiple select example">
                @foreach($tags as $tag)
                    <option @if ($loop->index == 0) selected @endif value="{{ $tag->id }}">{{ $tag->title }}</option>
                @endforeach
            </select>
            @error('tags[]')
            <p class="alert-danger">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection

