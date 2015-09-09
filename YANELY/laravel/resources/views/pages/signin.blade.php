@extends('app')

@section('content')

<div class='container'>
    <h3>Sign In</h3>
    {!! Form::open(['class' => 'col-md-4']) !!}
        <div class="form-group">
            {!! Form::label('email_li', 'Email: ', ['class' => 'control-label']) !!}
            {!! Form::email('email_li', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password_li', 'Password: ', ['class' => 'control-label']) !!}
            {!! Form::password('password_li', ['class' => 'form-control']) !!}
        </div>
    {!! Form::close() !!}
</div>

@stop