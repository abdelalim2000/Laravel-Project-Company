@extends('layouts.app')

@section('title', 'Company || Create Employee')

@section('content')
    <form action="/employees" method="post" class="text-left my-3">
        @csrf
        <div class="form-group">
            <label for="firstName">First Name</label>
            <input type="text" id="firstName" name="first_name" class="form-control">
        </div>
        <div class="form-group">
            <label for="lastName">Last Name</label>
            <input type="text" id="lastName" name="last_name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="salary">Salary</label>
            <input type="number" id="salary" name="salary" class="form-control">
        </div>
        <input type="submit" value="Create" name="submit" class="btn btn-outline-success">
    </form>
@endsection
