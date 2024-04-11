@extends('layouts.master')

@section('title', 'Contact Us | ' . env('APP_NAME'))

@section('content')


    <!-- Hero Start -->
    <div class="container-fluid bg-light py-6 my-6 mt-0">
        <div class="container text-center animated bounceInDown">
            <h1 class="display-1 mb-4">Contact</h1>
            <ol class="breadcrumb justify-content-center mb-0 animated bounceInDown">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item text-dark" aria-current="page">Contact</li>
            </ol>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Contact Start -->
    <div class="container-fluid contact py-2 wow bounceInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="p-5 bg-light rounded contact-form">
                <div class="row g-4">
                    <div class="col-12">
                        <small
                            class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">
                            Get in touch
                        </small>
                        <h1 class="display-5 mb-0">
                            Contact Us For Any Queries!
                        </h1>
                    </div>
                    <div class="col-md-6 col-lg-7">
                        <p class="mb-4">
                            At Delman Logistics Solutions we believe that there is no better business
                            referral than that given by a satisfied client.
                            <a href="#">
                                Download Our App Now
                            </a> To get started.
                        </p>
                        <form>
                            <input type="text" class="w-100 form-control p-3 mb-4 border-primary bg-light"
                                placeholder="Your Name">
                            <input type="email" class="w-100 form-control p-3 mb-4 border-primary bg-light"
                                placeholder="Enter Your Email">
                            <textarea class="w-100 form-control mb-4 p-3 border-primary bg-light" rows="4" cols="10"
                                placeholder="Your Message"></textarea>
                            <button class="w-100 btn btn-primary form-control p-3 border-primary bg-primary rounded-pill"
                                type="submit">Submit Now</button>
                        </form>
                    </div>
                    <div class="col-md-6 col-lg-5">
                        <div>
                            <div class="d-inline-flex w-100 border border-primary p-4 rounded mb-4">
                                <i class="fas fa-map-marker-alt fa-2x text-primary me-4"></i>
                                <div class="">
                                    <h4>Address</h4>
                                    <p>
                                        1st Floor, Uganda Hse, Kenyatta
                                        Avenue, Nairobi, Kenya.
                                    </p>
                                </div>
                            </div>
                            <div class="d-inline-flex w-100 border border-primary p-4 rounded mb-4">
                                <i class="fas fa-envelope fa-2x text-primary me-4"></i>
                                <div class="">
                                    <h4>Mail Us</h4>
                                    <p class="mb-2">info@delman.co.ke</p>
                                    <p class="mb-0">support@delman.co.ke</p>
                                </div>
                            </div>
                            <div class="d-inline-flex w-100 border border-primary p-4 rounded">
                                <i class="fa fa-phone-alt fa-2x text-primary me-4"></i>
                                <div class="">
                                    <h4>Telephone</h4>
                                    <p class="mb-2">(020)2006464</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


@endsection
