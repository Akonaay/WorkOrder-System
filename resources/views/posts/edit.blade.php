@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Post</h1>
        {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST']) !!}
            <div class="form-group">
                {{Form::label('title', 'Title', ['class' => 'font-weight-bold'])}}
                {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title Name'])}}
            </div>
            <div class="form-group">
                {{Form::label('body', 'Body', ['class' => 'font-weight-bold'])}}
                {{Form::textarea('body', $post->body, ['class' => 'form-control', 'placeholder' => 'Message goes here...'])}}
            </div>
            {{Form::hidden('_method','PUT')}}
            <div class="form-group">
                {{Form::submit('Submit', ['class' => 'btn btn-primary btn-block'])}}
            </div>
        {!! Form::close() !!}
    </div>
    
    
@endsection