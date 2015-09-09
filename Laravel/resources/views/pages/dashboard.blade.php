@extends('app')

@section('Application-Content')

<div class="container-fluid">
    <h3>This is the dashboard</h3>
    <section>
        <a href="{{ url('/roommate/') }}">Add a Roommate</a>&nbsp;&nbsp;|&nbsp;&nbsp;
        <a href="{{ url('/billing/') }}">Add a Bill</a>
    </section>

</div>

@endsection