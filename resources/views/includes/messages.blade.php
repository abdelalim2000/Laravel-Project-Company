@if($errors->any())
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">{{$error}}</div>
    @endforeach
@endif

@if(session('Msg'))
    <div class="alert alert-success">{{session('Msg')}}</div>
@endif
