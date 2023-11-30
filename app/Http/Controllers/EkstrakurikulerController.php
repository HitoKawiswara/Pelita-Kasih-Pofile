<?php

namespace App\Http\Controllers;
use App\Models\ekstrakurikuler;
use Illuminate\Http\Request;

class EkstrakurikulerController extends Controller
{
    public function index()
    {
        $ekskul = ekstrakurikuler::all();
        dd('ekskul');
        return view('user.ekstrakurikuler',compact('ekskul'));

}
}