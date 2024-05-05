<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Onlineshop\Entities\OnliItem;

use Intervention\Image\Facades\Image;
use Intervention\Image\Font;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;

class WebController extends Controller
{
    protected $paginationTheme = 'tailwind';
    public function index()
    {

        return view('home');
    }
}
