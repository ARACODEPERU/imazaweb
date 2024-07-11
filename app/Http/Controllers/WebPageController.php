<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class WebPageController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }
}
