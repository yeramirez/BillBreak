@extends('app')


@section('Application-Content')
    <div class="container-fluid col-md-6 create">
        <h3 class="">Add Roommate</h3>

        {!! Form::open(['method' => 'Post', 'action' => 'RoommateController@store'], ['class' => 'col-md-8']) !!}
        <div class="form-group">
            {!! Form::label('inviteRoommate','Roommates Name: ') !!}
            {!! Form::text('inviteRoommate',null,['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('inviteEmail','Roommate Email: ') !!}
            {!! Form::text('inviteEmail',null,['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Preview', ['class' => 'btn btn-primary']) !!}&nbsp;&nbsp;
            <?php echo link_to_action('PagesController@dashboard', $title = 'Back to Dashboard', $parameters = array(), $attributes = array()); ?>
        </div>
        {!! Form::close() !!}

        @include('partials.list')
    </div>

@endsection


