@extends('app')


@section('Application-Content')
    <div class="container-fluid col-md-6 create">
        <h3 class="">Add Roommate</h3>

        {!! Form::open(['method' => 'POST', 'action' => 'RoommateController@create'], ['class' => 'col-md-8']) !!}
        <div class="form-group">
            {!! Form::label('rmName','Roommates Name: ') !!}
            {!! Form::text('rmName',null,['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('rmEmail','Roommate Email: ') !!}
            {!! Form::text('rmEmail',null,['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('rmPassword','Create Roommate Password: ') !!}<br>
            {!! Form::password('rmPassword',null,['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Register', ['class' => 'btn btn-primary']) !!}&nbsp;&nbsp;
            <?php echo link_to_action('PagesController@dashboard', $title = 'Back to Dashboard', $parameters = array(), $attributes = array()); ?>
        </div>
        {!! Form::close() !!}

        @include('errors.list')
    </div>

@endsection


