<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class MainPageController extends Controller
{
    function index() {
        $newsList = News::all();

        return view('user.main', compact('newsList'));
    }
}
