<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use RealRashid\SweetAlert\Facades\Alert;

class AdminAboutController extends Controller
{
    public function manageAbout()
    {
        $data=[
            'about' => About::find(1),
        ];
        return view('admin.pages.about.manage', $data);
    }

    public function updateAbout(Request $request)
    {
        $validated=$request->validate([
            'title' => 'required',
            'details' => 'required',
            'subTitle1' => 'required',
            'subTitle2' => 'required',
            'subTitle3' => 'required',
            'subDetails1' => 'required',
            'subDetails2' => 'required',
            'subDetails3' => 'required',
        ]);
        $about = About::find(1);
        $about->title = $validated['title'];
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            unlink('site/uploads/about/' . $about->photo);
            $time = md5(time()) . '.' . $photo->getClientOriginalExtension();
            $photo->move('site/uploads/about/', $time);
            $about->photo = $time;
        }
        $about->details = $validated['details'];
        $about->subTitle1 = $validated['subTitle1'];
        $about->subTitle2 = $validated['subTitle2'];
        $about->subTitle3 = $validated['subTitle3'];
        $about->subDetails1 = $validated['subDetails1'];
        $about->subDetails2 = $validated['subDetails2'];
        $about->subDetails3 = $validated['subDetails3'];
        $about->save();
        Alert::success('success!','About Section has been updated Successfully!');
        return redirect()->back();
    }
}
