@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="/workorders" class="btn btn-outline-info btn-sm float-right">Go Back</a>
        <h3 class="text-center">Create Workorder</h3>
        {!! Form::open(['action' => 'WorkorderController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            <div class="form-row">
                <div class="form-group col-md-4">
                    {{Form::label('wdate', 'Date', ['class' => 'font-weight-bold'])}}
                    {{Form::date('wdate', \Carbon\Carbon::now(), ['class' => 'form-control'])}}
                </div>
                <div class="form-group col-md-4">
                    {{Form::label('client', 'Client', ['class' => 'font-weight-bold'])}}
                    {{Form::text('client', '', ['class' => 'form-control', 'placeholder' => 'Client Name'])}}
                </div>
                <div class="form-group col-md-4">
                    {{Form::label('address1', 'Client Address', ['class' => 'font-weight-bold'])}}
                    {{Form::text('address1', '', ['class' => 'form-control', 'placeholder' => 'Client Address'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    {{Form::label('wono', 'WO #', ['class' => 'font-weight-bold'])}}
                    {{Form::text('wono', '', ['class' => 'form-control', 'placeholder' => 'Workorder No.'])}}
                </div>
                <div class="form-group col-md-6">
                    {{Form::label('acno', 'A/C #', ['class' => 'font-weight-bold'])}}
                    {{Form::text('acno', '', ['class' => 'form-control', 'placeholder' => 'Account Number'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    {{Form::label('fat', 'FAT', ['class' => 'font-weight-bold'])}}
                    {{Form::text('fat', '', ['class' => 'form-control', 'placeholder' => 'FAT'])}}
                </div>
                <div class="form-group col-md-3">
                    {{Form::label('tag', 'TAG', ['class' => 'font-weight-bold'])}}
                    {{Form::text('tag', '', ['class' => 'form-control', 'placeholder' => 'TAG'])}}
                </div>
                <div class="form-group col-md-3">
                    {{Form::label('pon', 'PON', ['class' => 'font-weight-bold'])}}
                    {{Form::text('pon', '', ['class' => 'form-control', 'placeholder' => 'PON'])}}
                </div>
                <div class="form-group col-md-3">
                    {{Form::label('signalo', 'Signal', ['class' => 'font-weight-bold'])}}
                    {{Form::text('signalo', '', ['class' => 'form-control', 'placeholder' => 'Signal'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    {{Form::label('decoder', 'Decoder', ['class' => 'font-weight-bold'])}}
                    {{Form::text('decoder', '', ['class' => 'form-control', 'placeholder' => 'Decoder'])}}
                </div>
                <div class="form-group col-md-4">
                    {{Form::label('fiber', 'Fiber (m)', ['class' => 'font-weight-bold'])}}
                    {{Form::text('fiber', '', ['class' => 'form-control', 'placeholder' => 'Fiber (m)'])}}
                </div>
                <div class="form-group col-md-4">
                    {{Form::label('utp', 'UTP (m)', ['class' => 'font-weight-bold'])}}
                    {{Form::text('utp', '', ['class' => 'form-control', 'placeholder' => 'UTP (m)'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    {{Form::label('prewire', 'Pre-wire', ['class' => 'font-weight-bold'])}}
                    {{Form::select('prewire', ['yes' => 'Yes', 'no' => 'No'], 'yes',  ['class' => 'custom-select mr-sm-2'])}}
                </div>
                <div class="form-group col-md-6">
                    {{Form::label('wtype', 'W-Type', ['class' => 'font-weight-bold'])}}
                    {{Form::select('wtype', ['mdu' => 'MDU', 'sfu' => 'SFU'], 'mdu', ['class' => 'custom-select mr-sm-2'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    {{Form::label('comment', 'Comment', ['class' => 'font-weight-bold'])}}
                    {{Form::textarea('comment', '', ['class' => 'form-control', 'placeholder' => 'Enter comments here...'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="file" name="imgfile[]" multiple="true" />
                </div>
                <div class="form-group col-md-6">
                    {{Form::text('team', '', ['class' => 'form-control', 'placeholder' => 'Team'])}}
                </div> 
            </div>
            <div class="form-group pt-3">
                {{Form::submit('Submit', ['class' => 'btn btn-md btn-outline-info btn-block'])}}
            </div>
        {!! Form::close() !!}
    </div>
@endsection