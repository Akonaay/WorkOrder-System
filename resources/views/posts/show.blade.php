@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="/posts" class="btn btn-outline-info btn-sm float-sm-right">Go back</a>
        <h1>{{$post->title}}</h1>
            <div class="lead">
                {{$post->body}}
            </div>
        <hr>
        <small>Written on {{$post->created_at}}</small>
        <hr>
        <a href="/posts/{{$post->id}}/edit" class="btn btn-outline-primary">Edit</a>

        {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right']) !!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-outline-danger'])}}
        {!! Form::close() !!}
    </div>
    
@endsection