@extends('main')

@section('content')
    @foreach($posts as $post)
        <h2>{{ $post->id }}. <a href=" {{ route('post.show', $post->id) }}">{{ $post->title }}</a></h2>
    @endforeach
    <a href="{{ route('post.create') }}">Add new</a>
    <div>
        {{ $posts->links() }}
    </div>
@endsection
