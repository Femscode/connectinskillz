@extends('layouts.app')

@section('title', 'About Us | ConnectinSkillz - We Connect the Dots')
@section('description', 'ConnectinSkillz is a UK-based company that offers guided professional training from top digital experts in different industries with live-work experience.')

@section('content')
    <!-- 1. About Hero Section -->
    <x-about.hero />

    <!-- 2. Overview & 5 Value Pillars -->
    <x-about.pillars />

    <!-- 3. E-Learning Section -->
    <x-about.elearning />

    <!-- 4. Virtual Experience Section -->
    <x-about.virtual-experience />

    <!-- 5. Certifications Section -->
    <x-about.certifications />

    <!-- 6. Progress Management Section -->
    <x-about.progress-management />

    <!-- 7. Mission & Vision Section -->
    <x-about.mission-vision />

    <!-- 8. Benjamin Franklin Quote Banner -->
    <x-about.quote-banner />

    <!-- 9. Our Progress Metrics Section -->
    <x-about.our-progress />
@endsection
