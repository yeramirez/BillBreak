@extends('app')

@section('content')

<div>
    <h3>Sign Up</h3>
    <form class="col-md-8">
        {!! Form::open() !!}
            <div class="form-group">
                {!! Form::label('email_li', 'Email: ', ['class' => 'control-label']) !!}
                {!! Form::email('email_li', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('password_li', 'Password: ', ['class' => 'control-label']) !!}
                {!! Form::password('password_li', null, ['class' => 'form-control']) !!}
            </div>
    </form>
</div>
{!! Form::close() !!}

@stop