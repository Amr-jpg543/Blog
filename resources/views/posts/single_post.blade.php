@extends('shared.app')

@section('title')
    SinglePost
@endsection

@section('content')
    Title: {{ $post['title'] }} <br>
    Description: {{ $post['description'] }} <br>
    <td><img src="{{ asset('storage/' . $post->photo) }}" alt="Post Image" width="100"></td>


    <td>
    @endsection
