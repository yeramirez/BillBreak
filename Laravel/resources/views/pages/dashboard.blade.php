
@extends('app')

@section('Application-Content')

<div class="container-fluid">
    <h3>This is the dashboard</h3>
    <section>
        <a href="{{ url('/roommate/') }}">Add a Roommate</a>&nbsp;&nbsp;|&nbsp;&nbsp;
        <a href="{{ url('/billing/') }}">Add a Bill</a>
    </section>
</div>

<?php
$Aholder = Auth::user()->email;
$roommates = DB::select('select * from roommates where rmPrimary = ?', [$Aholder]);

foreach ($roommates as $rm) {
    echo $rm->rmName;
}



?>
@endsection