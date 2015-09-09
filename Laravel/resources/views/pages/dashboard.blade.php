
@extends('app')

@section('Application-Content')

<div class="container-fluid">
    <h3>This is the dashboard</h3>
    <section>
        <a href="{{ url('/roommate/') }}">Add a Roommate</a>&nbsp;&nbsp;|&nbsp;&nbsp;
        <a href="{{ url('/billing/') }}">Add a Bill</a>
    </section>
</div>

<table class="table table-bordered table-hover">
	<thead>
    <tr>
      <th>#</th>
      <th>Roommate Name</th>
    </tr>
  </thead>
  <tbody>
  	<tr>
<?php
$Aholder = Auth::user()->email;
$roommates = DB::select('select * from roommates where rmPrimary = ?', [$Aholder]);

foreach ($roommates as $rm) {
	echo "<td>" . $rm->rmId . "</td>";
    echo "<td>" . $rm->rmName . "<button type='button' class='btn-link pull-right'><span class='glyphicon glyphicon glyphicon-trash' aria-hidden=true'></span></button></td></tr>";
}

?>
		
	</tbody>
</table>
@endsection