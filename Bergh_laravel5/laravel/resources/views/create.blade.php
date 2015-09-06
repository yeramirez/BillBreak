<!DOCTYPE html>
<html>
<head>
	<title>Look! I'm CRUDding</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('accounts') }}">Bill Alert</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('accounts') }}">View All bills</a></li>
		<li><a href="{{ URL::to('create') }}">Add Bill</a>
	</ul>
</nav>

<h1>Add A Bill</h1>

<!-- if there are creation errors, they will show here -->
<!-- {{ !! HTML::ul($errors->all() ) !! }} -->

<!-- {{ !! Form::open(array('url' => 'accounts')) !! }}

	<div class="form-group">
		{{!! Form::label('name', 'Name') !!}}
		{{ !! Form::text('name', Input::old('name'), array('class' => 'form-control') !! }}
	</div>

	<div class="form-group">
		{{  Form::label('email', 'Email') }}
		{{ Form::email('email', Input::old('email'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('account_level', 'Nerd Level') }}
		{{ Form::select('account_level', array('0' => 'Select a Level', '1' => 'Sees Sunlight', '2' => 'Foosball Fanatic', '3' => 'Basement Dweller'), Input::old('nerd_level'), array('class' => 'form-control')) }}
	</div>

	{{ Form::submit('Create the Bill!', array('class' => 'btn btn-primary')) }}

{{ !! Form::close() !!}} -->


 { !! Form::open() !!}
hello
 { !! Form::close() !!}
</div>
</body>
</html>