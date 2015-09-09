
@extends('app')

@section('Application-Content')

<div class="container-fluid">
    <h3>This is the dashboard</h3>
    <section>
        <a href="{{ url('/roommate/') }}">Add a Roommate</a>&nbsp;&nbsp;|&nbsp;&nbsp;
        <a href="{{ url('/billing/') }}">Add a Bill</a>
    </section>
    <br>
</div>

<table class="table table-bordered table-hover">
	<thead>
    <tr>
      <th>Email</th>
      <th>Roommate Name</th>
    </tr>
  </thead>
  <tbody>
  	<tr>
<?php
$Aholder = Auth::user()->email;
$roommates = DB::select('select * from roommates where rmPrimary = ?', [$Aholder]);

foreach ($roommates as $rm) {
	echo "<td>" . $rm->rmEmail . "</td>";
    echo "<td>" . $rm->rmName . "<button type='button' class='btn-link pull-right'><span class='glyphicon glyphicon glyphicon-trash' aria-hidden=true'></span></button></td></tr>";
}

?>
		
	</tbody>
</table>

<br>

<table class="table table-bordered table-hover">
	<thead>
    <tr>
      <th>Bill Name</th>
      <th>Bill Amount</th>
    </tr>
  </thead>
  <tbody>
  	<tr>
<?php
$Aholder = Auth::user()->email;
$bills = DB::select('select * from bills where bill_holder = ?', [$Aholder]);

foreach ($bills as $bill) {
	echo "<td>" . $bill->bill_name . "</td>";
    echo "<td>$" . $bill->bill_amount . "<button type='button' class='btn-link pull-right'><span class='glyphicon glyphicon glyphicon-trash' aria-hidden=true'></span></button></td></tr>";
}

?>
		
	</tbody>
</table>

@endsection