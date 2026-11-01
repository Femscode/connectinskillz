@extends('layouts.app')

@section('title', 'Courses | ConnectinSkillz - Book a Seat')
@section('description', 'Launch Your Tech Career from Anywhere! Master In-Demand Skills with Our Expert-Led Courses and Land High-Paying Online Jobs.')

@section('content')
    <!-- 1. Courses Hero Section -->
    <x-courses.hero />

    <!-- 2. Courses Grid Section -->
    <x-courses.course-list :courses="$courses" />
@endsection
