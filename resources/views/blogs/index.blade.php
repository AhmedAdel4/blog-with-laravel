@extends('layouts.app')
@section('content')
    @foreach ($blogs as $blog)
    <div class="col-md-12">
        <br>
        <div class="card">

            <div class="card-header">
                    <a href="{{ route('blog_path',['blog' => $blog->id]) }}">{{ $blog->title }}</a>
            </div>
            <div class="card-body">
                    {{ $blog->content }}
                    <p class="lead">
                        Posted
                        {{ $blog->created_at->diffForHumans() }}
                    </p>
                    <a href="{{ route('blog_path',['blog' => $blog->id]) }}" class="btn btn-outline-primary">View Post</a>
            </div>


        </div>
        <br>
    </div>



    @endforeach
@endsection
