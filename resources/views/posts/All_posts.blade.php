@extends('shared.app')

@section('title')
    All posts
@endsection
@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">description</th>
                <th scope="col">image</th>
                <th scope="col">Handle</th>

            </tr>
        </thead>
        @foreach ($posts as $post)
            <tbody>
                <tr>
                    <th scope="row">{{ $post['id'] }}</th>
                    <td>{{ $post['title'] }}</td>
                    <td>{{ $post['description'] }}</td>
                    <td><img src="{{ asset('storage/' . $post->photo) }}" alt="Post Image" width="100"></td>


                    <td>
                        <a href="{{ route('posts.show', $post['id']) }}" class="btn btn-primary">Show</a>
                        <a href="" class="btn btn-success">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
                </tr>

            </tbody>
        @endforeach
        <div class="mt-4">
            {{ $posts->links('pagination::bootstrap-5') }}
        </div>
    </table>
@endsection
