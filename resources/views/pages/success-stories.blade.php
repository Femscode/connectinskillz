@extends('layouts.app')

@section('title', 'Success Stories | ConnectinSkillz - Explore & Hear from Our Candidates')
@section('description', 'Read inspiring transformation stories from ConnectinSkillz candidates who transitioned into high-paying digital tech roles.')

@section('content')
    <!-- 1. Success Stories Hero Section -->
    <x-stories.hero />

    <!-- 2. Candidate Success Stories List Grid -->
    <x-stories.candidate-list :candidates="$candidates" />
@endsection
