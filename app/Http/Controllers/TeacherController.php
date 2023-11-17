<?php

namespace App\Http\Controllers;

use App\Models\Teachers;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    function index() {
        $guruList = Teachers::all();

        return view('user.data-guru', compact('guruList'));
    }
}
