<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class WorkshopController extends Controller
{
    /**
     * Display the 5-Week Digital Business Analysis Workshop page.
     */
    public function index(): View
    {
        return view('pages.workshop');
    }
}
