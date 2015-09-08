<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>
	<meta name="keywords" content="BillBreak"/>
	<meta name="description" content="BillBreak makes splitting bills with roommates fast and easy"/>
	<meta name="author" content="Robert Maxfield (Jasilo), Yanely Ramirez, Brandy Bergh, Brandon Hess"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    
	<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/paper/bootstrap.min.css" rel="stylesheet" integrity="sha256-hMIwZV8FylgKjXnmRI2YY0HLnozYr7Cuo1JvRtzmPWs= sha512-k+wW4K+gHODPy/0gaAMUNmCItIunOZ+PeLW7iZwkDZH/wMaTrSJTt7zK6TGy6p+rnDBghAxdvu1LX2Ohg0ypDw==" crossorigin="anonymous">
	<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="/sass/main.css" >
    <link rel="icon" type="image/png" href="img/favicon.png">

	<title>Bill Break</title>

</head>
<body>
	@include('partials.navigation')
	@yield('Application-Content')
    @include('partials.footer')
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
