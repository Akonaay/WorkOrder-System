@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="/workorders" class="btn btn-outline-info btn-sm float-right">Go back</a>
        <h1>WO# : {{$workorder->wono}}</h1>
            <div class="lead">
                {{$workorder->client}}
            </div>
        <hr>
        <small>Written on {{$workorder->created_at}}</small>
    </div>
@endsection