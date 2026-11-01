@extends('layouts.app')

@section('title', '5 Weeks Digital Business Analysis Workshop | ConnectinSkillz')
@section('description', 'Launch your future career with our 5 weeks Digital Business Analysis Workshop tailored to help empower people to improve their career and double their income.')

@section('content')
<!-- 1. Workshop Hero Section (Screenshot 4) -->
<x-workshop.hero />

<!-- 2. About the Workshop & Student Metric Badges (Screenshot 2) -->
<x-workshop.about />

<!-- 6. Final CTA: Move a Step further into achieving your Dreams (Screenshot 5) -->
<x-workshop.cta-banner />

<!-- 4. Why should you join the Workshop? (Screenshot 3) -->
<x-workshop.why-join />

<!-- 3. Workshop Calendar & Stats Section (Screenshot 1) -->
<x-workshop.calendar />



<!-- 5. Frequently Asked Questions (Brand-new interactive design) -->
<x-workshop.faq />



<!-- 6. Interactive Enrollment Modal -->
<x-workshop.enroll-modal />
@endsection