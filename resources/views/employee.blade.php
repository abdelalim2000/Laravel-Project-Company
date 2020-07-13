@extends('layouts.app')

@section("title", "Company || Employee")

@section("content")
    <div class="row text-center my-3">
        @foreach($events as $event)
            <div class="col-md-4 col-sm-12">
                <div class="card mt-2" style="width: 20rem; ">
                    <div class="card-body">
                        <h5 class="card-title">{{$event->first_name}} {{$event->last_name}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Email: {{$event->email}}</h6>
                        <p class="card-text">Salary: {{$event->salary}}</p>
                        <a href="{{url('/employees/'.$event->id)}}" class="btn btn-outline-info">More Info</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="row mt-3">
        <div class="col-sm-12 d-flex justify-content-center">
            {{$events->links()}}
        </div>
    </div>
@endsection
