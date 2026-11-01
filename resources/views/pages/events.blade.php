@extends('layouts.app')

@section('title', 'Events | ConnectinSkillz - We Connect the Dots')
@section('description', 'Join ConnectinSkillz events, bootcamps and free career talks. Learn in-demand tech skills from top digital experts and catch up on recorded sessions.')

@section('content')
    <!-- 1. Unified Hero Section (Consistent with Courses & About hero standards) -->
    <x-events.hero />

    <!-- 2. Registration Ongoing (Screenshot 3 content in a clean, featured card layout) -->
    <x-events.bootcamp-ongoing />

    <!-- 3. Catch Up Banner (Screenshot 4 content in an elegant, contained callout banner) -->
    <x-events.catchup-banner />

    <!-- 4. Past Events & Concluded Cohorts (Screenshot 2 and Screenshot 5 in 2-column structured cards) -->
    <x-events.past-events />

    <!-- 5. Interactive Modals (Video Streaming, Registration Form, Waiting List) -->
    <x-events.modals />
@endsection
