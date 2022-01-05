@extends('main')

@section('content')
    @foreach($posts as $post)
        <h2>{{ $post->id }}. <a href=" {{ route('post.show', $post->id) }}">{{ $post->title }}</a></h2>
    @endforeach
    <div>
        {{ $posts->withQueryString()->links() }}
    </div>
@endsection
