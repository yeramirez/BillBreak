@extends('app')


@section('Application-Content')
    <h1 class="page-heading">Prepare notice</h1>

    {!! Form::open(['method' => 'GET', 'action' => 'NoticesController@confirm'], ['class' => 'col-md-8']) !!}
    <div class="form-group">
        {!! Form::label('inviteRoommate','Roommates Name: ') !!}
        {!! Form::text('inviteRoommate',null,['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('inviteEmail','Roommate Email: ') !!}
        {!! Form::text('inviteEmail',null,['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Preview', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}

    @include('errors.list')

@endsection


