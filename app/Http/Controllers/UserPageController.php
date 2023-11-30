<?php

namespace App\Http\Controllers;

use App\Models\AkademikImg;
use App\Models\News;
use App\Models\Structure;
use Illuminate\Http\Request;

class UserPageController extends Controller
{
    public function news_show() {
        $newsList = News::all();

        return view('user.main')->with(['newsList' => $newsList]);
    }

    public function structure_show(Request $request) {
        $struktur = Structure::all();

        if ($request->is('struktur/guru')) {
            return view('user.struktur-guru')->with(['struktur' => $struktur]);
        } elseif ($request->is('struktur/staff')) {
            return view('user.struktur-staff')->with(['struktur' => $struktur]);
        }

        return abort(404);
    }

    public function akademik_show() {
        $images = AkademikImg::all();
        
        return view('user.akademik')->with(['images' => $images]);
    }
}
