<?php

namespace App\Http\Controllers;

use App\Models\HomeScreen;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function getvideoTitle()
    {
        return HomeScreen::where('slug', 'video_title')->value('title');
    }
}
