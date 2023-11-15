@extends('layouts.main')
@section('container')

    <h1>Blog</h1>
    <ul style="list-style-type: none;">
        @foreach($posts as $value)
        <li>
            <a href="/posts/{{$value->id}}"><h1>{{ $value->title }}</h1></a>
            <h6>{{ $value->excerpt }}</h6>
            <br>
        </li>
        @endforeach
    </ul>
@endsection