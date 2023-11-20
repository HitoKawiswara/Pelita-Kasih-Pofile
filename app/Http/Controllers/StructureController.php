<?php

namespace App\Http\Controllers;

use App\Models\Structure;
use Illuminate\Http\Request;

class StructureController extends Controller
{
    public function index(Request $request)
    {
        $struktur = Structure::all();

        if ($request->is('struktur/guru')) {
            return view('user.struktur-guru', compact('struktur'));
        } elseif ($request->is('struktur/staff')) {
            return view('user.struktur-staff', compact('struktur'));
        }

        return abort(404);
    }
}
