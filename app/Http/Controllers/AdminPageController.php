<?php

namespace App\Http\Controllers;

use App\Models\AkademikImg;
use App\Models\News;
use App\Models\Structure;
use App\Models\Ekstrakurikuler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Laravel\Ui\Presets\React;

class AdminPageController extends Controller
{

    //show
    public function show_news()
    {
        $news = News::withTrashed()->get();

        return view('admin.berita')->with(['news' => $news]);
    }

    public function show_akademik()
    {
        $images = AkademikImg::all();

        return view('admin.akademik')->with(['images' => $images]);
    }

    public function show_structure()
    {
        $structures = Structure::all()->sortBy('work_as');

        return view('admin.struktur')->with(['structures' => $structures]);
    }

    public function show_ekstrakurikuler()
    {
        $ekskul = Ekstrakurikuler::all();

        return view('admin.ekstrakurikuler')->with(['ekskul' => $ekskul]);
    }

    //store
    public function store_news(Request $request)
    {

        $reqImgExt = 'required|image|mimes:jpeg,png,jpg,gif';

        $validatedData = $request->validate([
            'thumbnail' => $reqImgExt,
            'img1' => $reqImgExt,
            'img2' => $reqImgExt,
            'title' => 'required|string|max:255',
            'content' => 'required|string|max:4294967295',
            'duration' => 'required|numeric'
        ]);

        foreach (['thumbnail', 'img1', 'img2'] as $imageField) {
            if ($request->hasFile($imageField)) {
                $image = $request->file($imageField);
                $filename = uniqid() . '_' . time() . '.' . $image->getClientOriginalExtension();

                $image->storeAs('public/images/berita', $filename);

                $validatedData[$imageField] = $filename;
            }
        }

        News::create($validatedData);

        return redirect()->route('adminBerita')->with('success', 'News Added !');
    }

    public function store_akademik(Request $request)
    {

        $reqImgExt = 'required|image|mimes:jpeg,png,jpg,gif';

        $validatedData = $request->validate([
            'img' => $reqImgExt,
            'type' => 'required|in:tk,sd,smp,sma',
        ]);
        
        foreach (['img'] as $imageField) {
            if ($request->hasFile('img')) {
                $image = $request->file('img');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                
                $image->storeAs('public/images/akademik/' . $validatedData['type'], $imageName);

                $validatedData[$imageField] = $imageName;
            }
        }

        AkademikImg::create($validatedData);

        return redirect()->back()->with('success', 'Image uploaded successfully');
    }

    public function store_structure(Request $request)
    {
        $reqImgExt = 'required|image|mimes:jpeg,png,jpg,gif';

        $validatedData = $request->validate([
            'img' => $reqImgExt,
            'name' => 'required|string|max:60',
            'work_as' => 'required|in:guru,staff,kepala sekolah,wakil kepala sekolah',
            'job_desc' => 'nullable|string|max:30',
            'category' => 'required|in:tk,sd,smp,sma',
        ]);
        
        foreach (['img'] as $imageField) {
            if ($request->hasFile('img')) {
                $image = $request->file('img');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
    
                $image->storeAs('public/images/struktur', $imageName);
    
                $validatedData[$imageField] = $imageName;
            }
        }

        Structure::create($validatedData);

        return redirect()->back()->with('success', 'Structure added successfully');
    }

    public function store_ekstrakurikuler(Request $request)
    {
        $reqImgExt = 'required|image|mimes:jpeg,png,jpg,gif';

        $validatedData = $request->validate([
            'img' => $reqImgExt,
            'img1' => $reqImgExt,
            'img2' => $reqImgExt,
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:4294967295',
        ]);

        foreach (['img', 'img1', 'img2'] as $imageField) {
            if ($request->hasFile($imageField)) {
                $image = $request->file($imageField);
                $imageName = uniqid() . '_' . time() . '.' . $image->getClientOriginalExtension();

                $image->storeAs('public/images/ekstra', $imageName);
                
                $validatedData[$imageField] = $imageName;
            }
        }

        Ekstrakurikuler::create($validatedData);

        return redirect()->back()->with('success', 'Ekstrakurikuler Added !');
    }

    //delete only
    public function delete_akademik(Request $request, $id) {
        $image = AkademikImg::findOrFail($id);

        Storage::delete('public/images/akademik/' . $image->type . $image->img);

        $image->delete();

        return redirect()->back();
    }

    public function delete_structure(Request $request, $id)
    {
        $image = Structure::findOrFail($id);

        Storage::delete('public/images/struktur/' . $image->img);

        $image->delete();

        return redirect()->back();
    }

    public function delete_ekstrakurikuler(Request $request, $id) {
        $ekskul = Ekstrakurikuler::findOrFail($id);

        $ekskul->delete();

        return redirect()->back();
    }

    //soft delete
    public function soft_delete_news(Request $request, $id)
    {
        $news = News::findOrFail($id);
        $news->delete();

        return redirect()->back();
    }

    //force delete
    public function force_delete_news(Request $request, $id)
    {
        $softDeletedNews = News::onlyTrashed()->find($id);

        if ($softDeletedNews) {

            Storage::delete('public/images/berita/' . $softDeletedNews->thumbnail);
            Storage::delete('public/images/berita/' . $softDeletedNews->img1);
            Storage::delete('public/images/berita/' . $softDeletedNews->img2);

            $softDeletedNews->forceDelete();
            return redirect()->back();
        } else {
            return redirect()->back();
        }
    }


    //restore
    public function restore_news(Request $request, $id)
    {
        $news = News::withTrashed()->findOrFail($id);
        $news->restore();

        return redirect()->back();
    }

    //update
    public function update_news(Request $request, $id)
    {
        $newsItem = News::findOrFail($id);

        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'duration' => 'required|numeric',
        ]);

        $newsItem->title = $validatedData['title'];
        $newsItem->content = $validatedData['content'];
        $newsItem->duration = $validatedData['duration'];

        $newsItem->save();

        return redirect()->back();
    }

    public function update_structure(Request $request, $id)
    {
        $teacherEdited = Structure::findOrFail($id);

        $validatedData = $request->validate([
            'name' => 'required|max:60',
            'work_as' => 'required|in:guru,staff,kepala sekolah, wakil kepala sekolah',
            'job_desc' => 'required|max:60',
            'category' => 'required|in:tk,sd,smp,sma',
        ]);

        $teacherEdited->name = $validatedData['name'];
        $teacherEdited->work_as = $validatedData['work_as'];
        $teacherEdited->job_desc = $validatedData['job_desc'];
        $teacherEdited->category = $validatedData['category'];


        $teacherEdited->save();

        return redirect()->back();
    }

    //search
    public function search_structure(Request $request)
    {
        $searchQuery = $request->input('search');

        $searchRes = Structure::where('name', 'like', '%' . $searchQuery . '%')
            ->orWhere('work_as', 'like', '%' . $searchQuery . '%')
            ->orWhere('job_desc', 'like', '%' . $searchQuery . '%')
            ->orWhere('category', 'like', '%' . $searchQuery . '%')
            ->get();

        return view('admin.struktur')->with(['searchRes' => $searchRes]);
    }
}
