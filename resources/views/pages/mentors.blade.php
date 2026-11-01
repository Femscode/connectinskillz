@extends('layouts.app')

@section('title', 'Our Mentors | ConnectinSkillz - Expert 1-on-1 Guidance')
@section('description', 'We offer personal mentorship in different fields of learning from the best industry SMEs.')

@section('content')
    <!-- 1. Our Mentors Hero Section -->
    <x-mentors.hero />

    <!-- 2. Mentors Grid Section -->
    <x-mentors.mentor-list :mentors="$mentors" />
@endsection
