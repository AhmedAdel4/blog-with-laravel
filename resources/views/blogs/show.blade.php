@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <br>
            <h3>{{ $blog->title }}</h3>
            <p class="lead">
                {{ $blog->content }}
            </p>

            <form action="{{ route('delete_blog_path',['id' => $blog->id]) }}" method="POST">
                @csrf
                @method('delete')
                <a class="btn btn-outline-info" href="{{ route('eidt_blog_path',['blog' => $blog->id]) }}">Edit</a>
                <a class="btn btn-outline-secondary" href="{{ route('blogs_path') }}">Back</a>
                <button type="submit" class="btn btn-outline-danger" >Delete</button>
            </form>
        </div>
    </div>
@endsection
