<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class EventsController extends Controller
{
    /**
     * Display the ConnectinSkillz Events page.
     */
    public function index(): View
    {
        return view('pages.events');
    }
}
