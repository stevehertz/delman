@extends('layouts.master')

@section('title', 'Home | ' . env('APP_NAME'))

@section('content')

    <!-- Hero Start -->
    @include('includes.parts.hero')
    <!-- Hero End -->
    
    <!-- About Satrt -->
    @include('includes.parts.about')
    <!-- About End -->

    <!-- Fact Start-->
    @include('includes.parts.facts')

    <!-- Modal Video -->
    @include('includes.modals.video')
    <!-- Fact End -->


    <!-- Service Start -->
    @include('includes.parts.services')
    <!-- Service End -->


    <!-- Events Start -->
    {{-- @include('includes.parts.events') --}}
    <!-- Events End -->


    <!-- Menu Start -->
    {{-- @include('includes.parts.menu') --}}
    <!-- Menu End -->


    <!-- Book Us Start -->
    @include('includes.parts.book')
    <!-- Book Us End -->


    <!-- Team Start -->
    {{-- @include('includes.parts.team') --}}
    <!-- Team End -->


    <!-- Testimonial Start -->
    @include('includes.parts.testimonials')
    <!-- Testimonial End -->
    
    <!-- Blog Start -->
    @include('includes.parts.blogs')
    <!-- Blog End -->

@endsection
