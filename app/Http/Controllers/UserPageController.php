<?php

namespace App\Http\Controllers;

use App\Models\AkademikImg;
use App\Models\Ekstrakurikuler;
use App\Models\News;
use App\Models\Structure;
use Illuminate\Http\Request;

class UserPageController extends Controller
{
    public function news_show()
    {
        $newsList = News::all();

        return view('user.main')->with(['newsList' => $newsList]);
    }

    public function news_show_more($id)
    {
        $news = News::findOrFail($id);

        // Split the content into paragraphs
        $paragraphs = explode("\n", $news->content);

        return view('user.berita.read-more')->with(['news' => $news, 'paragraphs' => $paragraphs]);
    }


    public function structure_show(Request $request)
    {
        $struktur = Structure::all();

        if ($request->is('struktur/guru')) {
            return view('user.struktur-guru')->with(['struktur' => $struktur]);
        } elseif ($request->is('struktur/staff')) {
            return view('user.struktur-staff')->with(['struktur' => $struktur]);
        }
    }

    public function akademik_show()
    {
        $images = AkademikImg::all();

        return view('user.akademik')->with(['images' => $images]);
    }

    public function ekstrakurikuler_show()
    {
        $ekstra = Ekstrakurikuler::all();

        return view('user.ekstrakurikuler')->with(['ekskul' => $ekstra]);
    }
}
