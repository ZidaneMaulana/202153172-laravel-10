@extends('layouts.main')
@section('container')

    <h3>{{ $post->title }}</h3>
    {!! $post->body !!}
    <a href="/blog">Back to Posts</a>

@endsection