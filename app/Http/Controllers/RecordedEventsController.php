<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class RecordedEventsController extends Controller
{
    /**
     * Display the Recorded Video Sessions page.
     */
    public function index(): View
    {
        return view('pages.recorded-events');
    }
}
