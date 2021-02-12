@extends('layouts.app')

@section('content')
<div class="table-responsive">
    <div class="container-fluid">
        <a href="/workorders/create" class="btn btn-outline-info btn-sm m-2 float-sm-right">Add workorder</a>
        <br>
        <h1>Workorders</h1>
        <span class="float-right">
            <input type="text" class="form-group mb-3">
        </span>
        <div class="table-responsive-sm pt-2">
            <table class="table table-sm table-bordered">
                <thead>
                <tr class="table-info">
                    
                    <th scope="col">Date</th>
                    <th scope="col">WO</th>
                    <th scope="col">Client</th>
                    <th scope="col">Address</th>
                    <th scope="col">A/C</th>
                    <th scope="col">FAT</th>
                    <th scope="col">TAG</th>
                    <th scope="col">PON</th>
                    <th scope="col">Signal</th>
                    <th scope="col">Decoder</th>
                    <th scope="col">Fiber(m)</th>
                    <th scope="col">UTP(m)</th>
                    <th scope="col">Prewire</th>
                    <th scope="col">Type</th>
                    <th scope="col">Comment</th>
                    <th scope="col">Team</th>
                    <th scope="col" class="text-center" colspan="2">Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($workorders as $workorder)
                        <tr>
                            <td>{{\Carbon\Carbon::parse($workorder->wdate)->format('d/m/Y')}}</td>
                            <td>{{$workorder->wono}}</td>
                            <td>{{$workorder->client}}</td>
                            <td>{{$workorder->address1}}</td>
                            <td>{{$workorder->acno}}</td>
                            <td>{{$workorder->fat}}</td>
                            <td>{{$workorder->tag}}</td>
                            <td>{{$workorder->pon}}</td>
                            <td>{{$workorder->signalo}}</td>
                            <td>{{$workorder->decoder}}</td>
                            <td>{{$workorder->fiber}}</td>
                            <td>{{$workorder->utp}}</td>
                            <td>{{$workorder->prewire}}</td>
                            <td>{{$workorder->wtype}}</td>
                            <td>{{$workorder->comment}}</td>
                            <td>{{$workorder->team}}</td>
                            <td><a class="btn btn-sm" href="/workorders/{{$workorder->id}}/edit"><i class="far fa-edit"></i></a></td>
                            <td>
                                {!! Form::open(['action' => ['WorkorderController@destroy', $workorder->id], 'method' => 'POST']) !!}
                                    {{ Form::hidden('_method', 'DELETE') }}
                                    {{ Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'btn', 'class' => 'btn btn-sm'] )  }}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </<div>
        {!! $workorders->links() !!}
    </div>
</div>
@endsection