<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cause;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class AdminCauseController extends Controller
{
    public function manageCause()
    {
        $data=[
            'causes' => Cause::all(),
        ];
        return view('admin.pages.cause.manage', $data);
    }
    public function addCause()
    {
        return view('admin.pages.cause.add');
    }

    public function storeCause(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'details' => 'required',
            'photo' => 'required',
        ]);

        $cause = new Cause();
        $baseSlug = Str::slug($request->title, '-');
        $slug = $baseSlug;
        $counter = 1;
        while (Cause::where('slug', $slug)->exists()) {
            $slug = $baseSlug . '-' . $counter;
            $counter++;
        }
        $cause->slug = $slug;
        $cause->title = $request->title;
        $cause->details = $request->details;
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $time = md5(time()) . '.' . $photo->getClientOriginalExtension();
            $photo->move('site/uploads/cause/', $time);
            $cause->photo = $time;
        }
        $cause->save();
        alert::success('Cause Added Successfully');
        return redirect()->route('manageCause');
    }

    public function editCause($slug)
    {
        $data = [
            'cause' => Cause::where('slug', $slug)->first(),
        ];
        return view('admin.pages.cause.edit', $data);
    }

    public function updateCause(Request $request, $slug)
    {
        $request->validate([
            'title' => 'required',
            'details' => 'required',
        ]);

        $cause = Cause::where('slug', $slug)->first();
        $baseSlug = Str::slug($request->title, '-');
        $slug = $baseSlug;
        $counter = 1;
        while (Cause::where('slug', $slug)->exists()) {
            $slug = $baseSlug . '-' . $counter;
            $counter++;
        }
        $cause->slug = $slug;
        $cause->title = $request->title;
        $cause->details = $request->details;
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            unlink('site/uploads/cause/' . $cause->photo);
            $time = md5(time()) . '.' . $photo->getClientOriginalExtension();
            $photo->move('site/uploads/cause/', $time);
            $cause->photo = $time;
        }
        $cause->save();
        alert::success('Cause Updated Successfully');
        return redirect()->route('manageCause');
    }

    public function deleteCause($slug)
    {
        $cause = Cause::where('slug', $slug)->first();
        unlink('site/uploads/cause/' . $cause->photo);
        Cause::where('slug', $slug)->delete();
        alert::success('Cause Deleted Successfully');
        return redirect()->route('manageCause');
    }
}
