<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class AboutController extends Controller
{
    /**
     * Display the ConnectinSkillz About Us page.
     */
    public function index(): View
    {
        return view('pages.about');
    }
}
