@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="/posts" class="btn btn-outline-info btn-sm float-right">Go back</a>
        <h1>Create Post</h1>
        {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
            <div class="form-group">
                {{Form::label('title', 'Title', ['class' => 'font-weight-bold'])}}
                {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title Name'])}}
            </div>
            <div class="form-group">
                {{Form::label('body', 'Body', ['class' => 'font-weight-bold'])}}
                {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Message goes here...'])}}
            </div>
            <div class="form-group">
                {{Form::submit('Submit', ['class' => 'btn btn-secondary btn-block'])}}
            </div>
        {!! Form::close() !!}
    </div>
@endsection