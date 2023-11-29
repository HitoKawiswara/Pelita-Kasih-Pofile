<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ekstrakurikuler;

class EkstrakurikulerController extends Controller
{
    public function index()
    {
        $ekskul = ekstrakurikuler::all();
        return view('user.ekstrakurikuler', compact('ekskul'));
    }
    public function create()
    {
        //return view('user.ekscreate');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:60',
            'description' => 'required|string',
            'image_path' => 'nullable|array',
        ]);

        Ekstrakurikuler::create($data);

        return redirect()->route('user.ekstrakurikuler');
    }


}