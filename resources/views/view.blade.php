@extends("layouts.app")

@section('title', "Company || View")

@section('content')
    <div class="row text-center">
        <div class="col-sm-12">
            <div class="card mt-2" style="width: 69rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$event->first_name}} {{$event->last_name}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Email: {{$event->email}}</h6>
                    <p class="card-text">Salary: {{$event->salary}}</p>
                    <a href="{{url('/edit/'.$event->id)}}" class="btn btn-outline-success">Update</a>
                    <form action="{{route('delete', ['id' => $event->id])}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
