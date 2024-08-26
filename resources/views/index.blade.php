@extends('layouts.app')
@section('content')
    <style>
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
        }
    </style>
    <header class="bg-light text-white d-flex align-items-center justify-content-center"
        style="height: 60vh; position: relative; background-image: url('assets/img/estudiantes.jpg'); background-size: cover; background-position: center;">
        <div class="overlay"></div>
        <div class="container text-center" style="position: relative; z-index: 2;">
            <h1 class="display-4 font-weight-bold mb-4">Your best decision for the future.</h1>
            <p class="lead mb-4">Discover how we can help you achieve your goals and prepare for a successful future.</p>
            <a  class="btn btn-primary btn-lg" href="{{ route('events') }}">Get Started</a>
            <div class="divider-custom divider-light mt-4">
            </div>
    </header>
    <div class="container mt-5">
        <h1 class="display-4 text-center mb-5">Visitors </h1>
        <div class="table-responsive">
            <div class="container mt-4">
                <div class="row">
                    @foreach ($visitors as $visitor)
                        <div class="col-12 col-md-6 col-lg-4 mb-4">
                            <div class="card h-100 shadow-sm">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title">{{ $visitor->name }} {{ $visitor->lastName }}</h5>
                                    <p class="card-text"><strong>Age:</strong> {{ $visitor->age }}</p>
                                    <p class="card-text"><strong>Email:</strong> {{ $visitor->email }}</p>
                                    <p class="card-text"><strong>Phone:</strong> {{ $visitor->phone }}</p>
                                    <p class="card-text"><strong>Address:</strong> {{ $visitor->address }}</p>
                                    <p class="card-text"><strong>Summary:</strong> {{ $visitor->summary }}</p>
                                    <div class="mt-auto d-flex justify-content-between">
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            {!! $visitors->links() !!}
        </div>
    @endsection
