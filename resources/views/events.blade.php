@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <!-- Banner -->
    <div class="jumbotron text-center  text-black py-5 mb-5">
        <h1 class="display-4">Upcoming Events at Career Training College</h1>
        <p class="lead">Join us and take the next step towards your future.</p>
    </div>
    
    <div class="row">
        <!-- Event 1 -->
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold">Career Fair 2024</h5>
                    <p class="card-text">
                        Meet top employers, explore career opportunities, and network with professionals.
                    </p>
                    <p class="card-text"><small class="text-muted">Date: September 15, 2024</small></p>
                    <p class="card-text"><small class="text-muted">Location: Main Campus Auditorium</small></p>
                    <a href="#" class="btn btn-primary">Registration</a>
                </div>
            </div>
        </div>

        <!-- Event 2 -->
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold">Workshop: Resume Building</h5>
                    <p class="card-text">
                        Learn how to create a professional resume that stands out.
                    </p>
                    <p class="card-text"><small class="text-muted">Date: October 10, 2024</small></p>
                    <p class="card-text"><small class="text-muted">Location: Room 204, Career Services</small></p>
                    <a href="#" class="btn btn-primary">Registration</a>
                </div>
            </div>
        </div>

        <!-- Event 3 -->
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold">Alumni Networking Event</h5>
                    <p class="card-text">
                        Connect with alumni from various industries and expand your network.
                    </p>
                    <p class="card-text"><small class="text-muted">Date: November 20, 2024</small></p>
                    <p class="card-text"><small class="text-muted">Location: Alumni Hall</small></p>
                    <a href="#" class="btn btn-primary">Registration</a>
                </div>
            </div>
        </div>

        <!-- Event 4 -->
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold">Tech Industry Insights</h5>
                    <p class="card-text">
                        Explore the latest trends in the tech industry and learn from experts.
                    </p>
                    <p class="card-text"><small class="text-muted">Date: December 5, 2024</small></p>
                    <p class="card-text"><small class="text-muted">Location: Technology Center, Room 101</small></p>
                    <a href="#" class="btn btn-primary">Registration</a>
                </div>
            </div>
        </div>

        <!-- Event 5 -->
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold">Healthcare Careers Expo</h5>
                    <p class="card-text">
                        Discover opportunities in the healthcare field and connect with leading organizations.
                    </p>
                    <p class="card-text"><small class="text-muted">Date: January 10, 2025</small></p>
                    <p class="card-text"><small class="text-muted">Location: Health Sciences Building, Room 305</small></p>
                    <a href="#" class="btn btn-primary">Registration</a>
                </div>
            </div>
        </div>

        <!-- Event 6 -->
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold">Business Leadership Seminar</h5>
                    <p class="card-text">
                        Learn about leadership in the business world from successful industry leaders.
                    </p>
                    <p class="card-text"><small class="text-muted">Date: February 15, 2025</small></p>
                    <p class="card-text"><small class="text-muted">Location: Business Center, Conference Room B</small></p>
                    <a href="#" class="btn btn-primary">Registration</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

