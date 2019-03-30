@extends('layouts.app')
@section('content')
    <form action="{{ route('store_blog_path') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="contetn">Content</label>
            <textarea name="content"  rows="10" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-outline-primary">Add blog post</button>
        </div>
    </form>
@endsection
