@extends('app')

@section('Application-Content')

<div class="container-fluid col-md-6 create">
	<h3>Add a Bill</h3>
	{!! Form::open() !!}
	<div class="form-group">
		{!! Form::label('bill_name', 'Bill Name: ') !!}
		{!! Form::text('bill_name', null, ['class' =>'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('bill_amount', 'Bill Amount ($): ') !!}
		{!! Form::text('bill_amount', null, ['class' =>'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('bill_type', 'Bill Type: ') !!}
		{!! Form::text('bill_type', null, ['class' =>'form-control']) !!}
	</div>
	<div class="form-group">
            {!! Form::submit('Add', ['class' => 'btn btn-primary']) !!}&nbsp;&nbsp;
            <?php echo link_to_action('PagesController@dashboard', $title = 'Back to Dashboard', $parameters = array(), $attributes = array()); ?>
    </div>
    {!! Form::close() !!}
</div>

@endsection