<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class MentorsController extends Controller
{
    /**
     * Display the ConnectinSkillz mentorship page.
     */
    public function index(): View
    {
        $mentors = [
            [
                'id' => 1,
                'name' => 'Ademola Davidson',
                'role' => 'Web developer',
                'description' => 'An expert in web development and Web App deveopment',
                'fullBio' => 'Ademola is a seasoned Full-Stack Web Developer with deep industry expertise in modern JavaScript frameworks, responsive frontend architecture, and robust scalable backend services. He has mentored over 100+ candidates into productive digital careers.',
                'image' => asset('placeholders/ademola.avif'),
            ],
            [
                'id' => 2,
                'name' => 'Oke Jacobs Acca',
                'role' => 'Business Architect & Career Coach',
                'description' => 'Experienced Business Analyst and Process Improvement Enthusiast, with architectural and operational knowledge across the end-to-end business landscape.',
                'fullBio' => 'Oke brings extensive cross-industry experience in Business Architecture, Agile transformation, and senior career advisory. She specializes in bridging candidate knowledge gaps and coaching candidates to excel in high-visibility business analyst positions.',
                'image' => asset('placeholders/oke.avif'),
            ],
            [
                'id' => 3,
                'name' => 'Funmi Adesanya',
                'role' => 'Finance and Relationship consultant',
                'description' => 'Systematic Financial consultant with 5years experience growing revenue through effective team and project management.',
                'fullBio' => 'Funmi is an accomplished Financial and Relationship Consultant who coaches candidates on stakeholder management, financial analytics, commercial strategy, and project leadership to accelerate organizational growth.',
                'image' => asset('placeholders/funmi.avif'),
            ],
        ];

        return view('pages.mentors', compact('mentors'));
    }
}
