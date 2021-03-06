<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{route('home')}}">Company</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('employees')}}">Employees</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('create')}}">Create Employee</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('blog')}}">Blog</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
