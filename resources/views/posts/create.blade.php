@extends('shared.app')

@section('title')
    CreatePost
@endsection

@section('content')
    <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input 
            type="text" 
            id="title" 
            name="title" 
            class="form-control @error('title') is-invalid @enderror"
            value="{{ old('title') }}"
            placeholder="Enter post title"
        >
        @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="photo" class="form-label">Photo</label>
        <input 
            type="file" 
            id="photo" 
            name="photo" 
            class="form-control @error('photo') is-invalid @enderror"
        >
        @error('photo')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea 
            id="description" 
            name="description" 
            class="form-control @error('description') is-invalid @enderror" 
            rows="3"
            placeholder="Write a short description"
        >{{ old('description') }}</textarea>
        @error('description')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <input type="submit" class="btn btn-primary w-100" value="Create Post">
    </div>
</form>

@endsection
