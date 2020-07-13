@extends('layouts.app')

@section('title', 'Company || Edit')

@section('content')
    <form action="{{"/employees/".$event->id}}" method="post" class="text-left my-3">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="firstName">First Name</label>
            <input type="text" id="firstName" name="first_name" class="form-control" value="{{$event->first_name}}">
        </div>
        <div class="form-group">
            <label for="lastName">Last Name</label>
            <input type="text" id="lastName" name="last_name" class="form-control" value="{{$event->last_name}}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" class="form-control" value="{{$event->email}}">
        </div>
        <div class="form-group">
            <label for="salary">Salary</label>
            <input type="number" id="salary" name="salary" class="form-control" value="{{$event->salary}}">
        </div>
        <input type="submit" value="Create" name="submit" class="btn btn-outline-success">
    </form>
@endsection
