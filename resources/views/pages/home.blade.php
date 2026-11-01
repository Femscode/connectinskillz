@extends('layouts.app')

@section('title', 'Connectinskillz | Discover Your Skills with our LMS')
@section('description', 'With our LMS we make your success attainable through a well structured learning pathway and training from the best SME\'s in your desired field.')

@section('content')
    <!-- 1. Hero Section -->
    <x-homepage.hero />

    <!-- 2. 5-Point LMS Learning Approach -->
    <x-homepage.learning-approach />

    <!-- 3. Digital Growth Section -->
    <x-homepage.digital-growth />

    <!-- 4. Courses Banner Slider -->
    <x-homepage.courses-slider />

    <!-- 5. Quote by Olayinka -->
    <x-homepage.quote />

    <!-- 6. Featured Courses 8-Slide Carousel -->
    <x-homepage.featured-courses-slider />

    <!-- 7. Top Industry Tools Carousel -->
    <x-homepage.tools-carousel />

    <!-- 8. Free Career Talk: "Time to double your Income" -->
    <x-homepage.career-talk />

    <!-- 9. Candidate Testimonials -->
    <x-homepage.candidate-stories />
@endsection
