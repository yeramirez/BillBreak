<!DOCTYPE html>
<html>
<head>
	<title>BillBreak</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('accounts') }}">Accounts</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('accounts') }}">Sign In</a></li>
		<li><a href="{{ URL::to('create') }}">Add A Bill</a>
	</ul>
</nav>

<h1>BillBreak</h1>
@section('sidebar')
            This is the master sidebar.
        @show


</div>
</body>
</html>