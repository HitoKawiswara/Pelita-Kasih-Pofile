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

                // Store the image in the storage directory
                $image->storeAs('public/images/berita', $filename);

                // Save the filename to the $validatedData array
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

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/images/akademik/' . $validatedData['type'], $imageName);

            $akademikImg = new AkademikImg;
            $akademikImg->img = $imageName;
            $akademikImg->type = $validatedData['type'];
            $akademikImg->save();

            return redirect()->route('admin.akademik')->with('success', 'Image uploaded successfully');
        }

        return redirect()->back()->with('error', 'Failed to upload image');
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

        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/images/struktur', $imageName);

            $structure = new Structure;
            $structure->img = $imageName;
            $structure->name = $validatedData['name'];
            $structure->work_as = $validatedData['work_as'];
            $structure->job_desc = $validatedData['job_desc'];
            $structure->category = $validatedData['category'];
            $structure->save();

            return redirect()->back()->with('success', 'Structure added successfully');
        }

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
                $filename = uniqid() . '_' . time() . '.' . $image->getClientOriginalExtension();
                $image->storeAs('public/images/ekstra', $filename);
                $validatedData[$imageField] = $filename;
            }
        }

        Ekstrakurikuler::create($validatedData);

        return redirect()->back()->with('success', 'Ekstrakurikuler Added !');
    }

    //delete only AKADEMIK
    public function delete_akademik(Request $request, $id) {
        $image = AkademikImg::findOrFail($id);

        $image->delete();

        return redirect()->back();
    }

    public function delete_structure(Request $request, $id)
    {
        $image = Structure::findOrFail($id);

        $image->delete();

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
     //soft delete ekstrakurikuler
     public function soft_delete_ekstra(Request $request, $id) {
        $news = Ekstrakurikuler::findOrFail($id);
        $news->delete();

        return redirect()->back();
    }

    //force delete ekstrakurikuler
    public function force_delete_ekstra(Request $request, $id) {
        $softDeletedNews = Ekstrakurikuler::onlyTrashed()->find($id);

        if ($softDeletedNews) {
            $softDeletedNews->forceDelete();
            return redirect()->back();
        } else {
            return redirect()->back();
        }
    }


    //restore ekstrakurikuler
    public function restore_ekstra(Request $request, $id) {
        $news = Ekstrakurikuler::withTrashed()->findOrFail($id);
        $news->restore();

        return redirect()->back();
    }

    //update ekstrakurikuler
    public function update_ekstra(Request $request, $id)
    {
        $ekstraItem = Ekstrakurikuler::findOrFail($id);

        $validatedData = $request->validate([
            'img' => $reqImgExt,
            'name' => 'required|max:60',
            'work_as' => 'required',
            'job_desc' => 'required',
            'category' => 'required',
        ]);

        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/images/struktur', $imageName);

            $teacherEdited->img = $imageName;
        }

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
