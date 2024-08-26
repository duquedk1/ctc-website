@extends('layouts.app')
@section('content')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <div class="container">
        <div class="table-responsive">
            @if (Session::has('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ Session::get('message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <a class="btn btn-primary" href="{{ url('visitor/create') }}">Create New</a>
            <br>
            <br>
            <div class="container mt-4">
                <div class="row">
                    @foreach ($visitors as $visitor)
                        <div class="col-12 col-md-6 col-lg-4 mb-4">
                            <div class="card h-100">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title">Visitor #{{ $visitor->id }}</h5>
                                    <p class="card-text"><strong>Name:</strong> {{ $visitor->name }}</p>
                                    <p class="card-text"><strong>Last Name:</strong> {{ $visitor->lastName }}</p>
                                    <p class="card-text"><strong>Age:</strong> {{ $visitor->age }}</p>
                                    <p class="card-text"><strong>Email:</strong> {{ $visitor->email }}</p>
                                    <p class="card-text"><strong>Phone:</strong> {{ $visitor->phone }}</p>
                                    <p class="card-text"><strong>Address:</strong> {{ $visitor->address }}</p>
                                    <p class="card-text"><strong>Summary:</strong> {{ $visitor->summary }}</p>
                                    <div class="card-actions mt-auto">
                                        <a href="{{ url('/visitor/' . $visitor->id . '/edit') }}"
                                            class="btn btn-secondary btn-action">Update</a>
                                        <form action="{{ url('/visitor/' . $visitor->id) }}" method="POST"
                                            class="d-inline" onsubmit="return confirm('Do you want delete?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            {!! $visitors->links() !!}
        </div>
    </div>
@endsection

<!-- Bootstrap CSS -->


<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

