@extends('layouts.app')

@section('title', 'Company || Home')

@section('content')
    <div class="jumbotron bg-dark text-white mt-3">
        <h1>Welcome to the best App to track your Employees</h1>
        <hr>
        <a href="{{route('employees')}}" class="btn btn-outline-success">More Info</a>
    </div>
@endsection
