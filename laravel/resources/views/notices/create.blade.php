@extends('app')


@section('Application-Content')
    <div class="container-fluid col-md-6 create">
        <h3 class="">Add Roommate</h3>

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
            {!! Form::submit('Preview', ['class' => 'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}

        @include('errors.list')
    </div>

@endsection


