@extends('app')

@section('content')
<div class="container">
    <h3>Registration</h3>
    {!! Form::open() !!}
        <div class="form-group">
            {!! Form::label('name', 'Name: ', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('email', 'Email: ', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::email('email', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('password', 'Password: ', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::password('password', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('confirm-password', 'Confirm Password: ', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::password('password', null, ['class' => 'form-control']) !!}
            </div>
            {!! Form::submit('Submit', ['class' => 'btn btn-default']); !!}
        </div>
</div>
{!! Form::close() !!}

@stop