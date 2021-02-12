@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="/posts/create" class="btn btn-outline-info btn-sm float-sm-right">Create Post</a>      
        <br>
        <h1>Posts</h1>
         
        @if (count($posts) > 0)
            @foreach ($posts as $post)
            
                <div class="alert alert-heading alert-info">
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                    <small>Written on {{$post->created_at}}</small>
                </div>
            @endforeach
            {{ $posts->links() }}
        @else 
            <p>No posts found</p>
        @endif
    </div>    
@endsection