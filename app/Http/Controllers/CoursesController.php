<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class CoursesController extends Controller
{
    /**
     * Display the ConnectinSkillz Courses catalog page.
     */
    public function index(): View
    {
        $courses = [
            [
                'id' => 1,
                'title' => 'Digital Project Management',
                'description' => 'Develop skills to lead tech projects efficiently in 12 weeks, mastering proven strategies, timelines, and team coordination to ensure successful project delivery in the fast-paced tech industry.',
                'image' => asset('placeholders/course-pm.svg'),
                'duration' => '12 weeks',
            ],
            [
                'id' => 2,
                'title' => 'Digital Business Analysis',
                'description' => 'Learn to analyze and enhance business strategies digitally in 12 weeks, using data to drive growth, optimize processes, and make informed decisions for success in the digital business world.',
                'image' => asset('placeholders/course-ba.svg'),
                'duration' => '12 weeks',
            ],
            [
                'id' => 3,
                'title' => 'Data Protection',
                'description' => 'Gain expertise in safeguarding sensitive data with this 12-week course, learning best practices, compliance, and security techniques to protect information in the ever-evolving tech landscape.',
                'image' => asset('placeholders/course-dp.svg'),
                'duration' => '12 weeks',
            ],
            [
                'id' => 4,
                'title' => 'UI/UX Design',
                'description' => 'Master the art of designing intuitive, user-friendly interfaces in 12 weeks, guided by experts, and create seamless digital experiences that meet modern standards, perfect for aspiring designers.',
                'image' => asset('placeholders/course-uiux.svg'),
                'duration' => '12 weeks',
            ],
            [
                'id' => 5,
                'title' => 'Data Analytics',
                'description' => 'Dive into the world of data with this 12-week course, learning to analyze trends, interpret insights, and use cutting-edge tools to make data-driven decisions, setting you up for a thriving tech career.',
                'image' => asset('placeholders/course-da.svg'),
                'duration' => '12 weeks',
            ],
        ];

        return view('pages.courses', compact('courses'));
    }
}
