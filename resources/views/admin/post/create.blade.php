@extends('layouts.admin')
@section('content')
    <form action="{{ route('admin.post.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="title" class="form-label">Title</label>
            <input
                value="{{ old('title') }}"
                type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Title">
            @error('title')
            <span class="error invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" placeholder="Content" rows="3">{{ old('content') }}</textarea>
            @error('content')
            <span class="error invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="image" class="form-label">Image</label>
            <input value="{{ old('image') }}" class="form-control @error('image') is-invalid @enderror" id="image" placeholder="Image" name="image">
            @error('image')
            <span class="error invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="category" class="form-label">Category</label>
            <select class="form-control @error('category') is-invalid @enderror" name="category_id" id="category">
                @foreach($categories as $category)
                    <option
                        {{ old('category_id') == $category->id ? 'selected' : '' }}
                        value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </select>
            @error('category')
            <span class="error invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="tags" class="form-label">Tags</label>
            <select class="form-control @error('tags[]') is-invalid @enderror" name="tags[]" multiple aria-label="multiple select example">
                @foreach($tags as $tag)
                    <option @if ($loop->index == 0) selected @endif value="{{ $tag->id }}">{{ $tag->title }}</option>
                @endforeach
            </select>
            @error('tags[]')
            <span class="error invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection

