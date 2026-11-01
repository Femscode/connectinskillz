<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\SuccessStoriesController;
use App\Http\Controllers\MentorsController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\WorkshopController;
use App\Http\Controllers\RecordedEventsController;
use App\Http\Controllers\MailingListController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/homepage', [HomeController::class, 'index'])->name('homepage');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/courses', [CoursesController::class, 'index'])->name('courses');
Route::get('/cs-courses', [CoursesController::class, 'index'])->name('cs-courses');
Route::get('/success-stories', [SuccessStoriesController::class, 'index'])->name('success-stories');
Route::get('/stories', [SuccessStoriesController::class, 'index'])->name('stories');
Route::get('/success-stories/{slug}', [SuccessStoriesController::class, 'show'])->name('success-stories.show')->where('slug', '[a-zA-Z0-9\.\-_]+');
Route::get('/stories/{slug}', [SuccessStoriesController::class, 'show'])->where('slug', '[a-zA-Z0-9\.\-_]+');
Route::get('/mentorship', [MentorsController::class, 'index'])->name('mentorship');
Route::get('/our-mentors', [MentorsController::class, 'index'])->name('our-mentors');
Route::get('/mentors', [MentorsController::class, 'index'])->name('mentors');
Route::get('/events', [EventsController::class, 'index'])->name('events');
Route::get('/workshop', [WorkshopController::class, 'index'])->name('workshop');
Route::get('/recorded-events', [RecordedEventsController::class, 'index'])->name('recorded-events');

// Mailing List Subscription
Route::post('/mailing-list', [MailingListController::class, 'store'])->name('mailing-list.store');
