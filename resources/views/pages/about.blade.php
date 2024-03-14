@extends('layouts.master')

@section('title', 'About | ' . env('APP_NAME'))

@section('content')

    <!-- Hero Start -->
    <div class="container-fluid bg-light py-6 my-6 mt-0">
        <div class="container text-center animated bounceInDown">
            <h1 class="display-1 mb-4">About Us</h1>
            <ol class="breadcrumb justify-content-center mb-0 animated bounceInDown">
                <li class="breadcrumb-item">
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li class="breadcrumb-item text-dark" aria-current="page">About</li>
            </ol>
        </div>
    </div>
    <!-- Hero End -->

    <!-- About Satrt -->
    @include('includes.parts.about')
    <!-- About End -->

    <!-- Fact Start-->
    @include('includes.parts.facts')

    <!-- Modal Video -->
    @include('includes.modals.video')
    <!-- Fact End -->

    @include('includes.parts.team')



@endsection
