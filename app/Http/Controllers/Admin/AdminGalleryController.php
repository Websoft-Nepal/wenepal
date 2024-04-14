<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallary;
use App\Models\Photos;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class AdminGalleryController extends Controller
{
    public function manageGallery()
    {
        $data=[
            'galleries'=>Gallary::with('photos')->get(),
        ];
        return view('admin.pages.gallery.manage',$data);
    }

    public function addGallery()
    {
        return view('admin.pages.gallery.add');
    }

    public function storeGallery(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'photo' => 'required',
        ]);
        $gallary = new Gallary();
        $gallary->title = $request->title;
        $gallarySlug = Str::slug($request->title, '-');
        $slug = $gallarySlug;
        $counter = 1;
        while(Gallary::where('slug', $slug)->exists()){
            $gallarySlug = $gallarySlug . '-' . $counter;
            $counter++;
        }
        $gallary->slug = $gallarySlug;
        $gallary->save();
        if($request->hasFile('photo')){
            $counter=1;
            foreach($request->file('photo') as $file){
                $photo = $file;
                $path= md5(time()) .$counter. '.' . $photo->getClientOriginalExtension();
                $counter++;
                $file->move('site/uploads/gallary/', $path);
                $gallary_photo = new Photos;
                $gallary_photo->gallary_id = $gallary->id;
                $gallary_photo->photo = $path;
                $gallary_photo->save();
            }
        }
        Alert::success('Success', 'Gallery Added Successfully');
        return redirect()->back();
    }

    public function editGallery($slug)
    {
        $data=[
            'gallery'=>Gallary::where('slug',$slug)->with('photos')->get()->first(),
        ];
        return view('admin.pages.gallery.edit',$data);
    }

    public function updateGallery(Request $request, $slug)
    {
        $request->validate([
            'title' => 'required',
        ]);
        $gallary = Gallary::where('slug', $slug)->first();
        $gallary->title = $request->title;
        $gallarySlug = Str::slug($request->title, '-');
        $slug = $gallarySlug;
        $counter = 1;
        while(Gallary::where('slug', $slug)->exists()){
            $gallarySlug = $gallarySlug . '-' . $counter;
            $counter++;
        }
        $gallary->slug = $gallarySlug;
        $gallary->save();
        if($request->hasFile('photo')){
            $counter=1;
            foreach($request->file('photo') as $file){
                if(Photos::where('photo', $file)->doesntExist()){
                    $photo = $file;
                    $path= md5(time()) .$counter. '.' . $photo->getClientOriginalExtension();
                    $counter++;
                    $file->move('site/uploads/gallary/', $path);
                    $gallary_photo = new Photos;
                    $gallary_photo->gallary_id = $gallary->id;
                    $gallary_photo->photo = $path;
                    $gallary_photo->save();
                }
            }
        }
        Alert::success('Success', 'Gallery Updated Successfully');
        return redirect()->back();
    }

    public function deleteGallery($slug)
    {
        $gallaryId = Gallary::where('slug', $slug)->first()->id;
        Gallary::where('slug', $slug)->delete();
        Photos::where('gallary_id', $gallaryId)->delete();
        Alert::success('Success', 'Gallery Deleted Successfully');
        return redirect()->back();
    }

    public function deletePhoto($id)
    {
        Photos::where('id', $id)->delete();
        Alert::success('Success', 'Photo Deleted Successfully');
        return redirect()->back();
    }
}
