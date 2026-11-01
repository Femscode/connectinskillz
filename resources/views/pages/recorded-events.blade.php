@extends('layouts.app')

@section('title', 'Recorded Video Sessions | ConnectinSkillz - We Have You Covered')
@section('description', 'If you missed any of our free Seminars do not worry, we have them available for you to access. Stream recorded webinars and career talks from top digital experts.')

@section('content')
    <!-- 1. Hero Section: We've got you covered (Screenshot 3) -->
    <x-recorded-events.hero />

    <!-- 2. Recorded Webinar Card: Free Career Talk & Speakers (Screenshot 1 & 2) -->
    <x-recorded-events.webinar-card />

    <!-- 3. Interactive Video Player Streaming Modal -->
    <x-recorded-events.video-modal />
@endsection
