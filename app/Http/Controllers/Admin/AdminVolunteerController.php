<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Volunteer;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class AdminVolunteerController extends Controller
{
    public function manageVolunteer()
    {
        $data=[
            'volunteers' => Volunteer::all()
        ];
        return view('admin.pages.volunteer.manage',$data);
    }

    public function addVolunteer()
    {
        return view('admin.pages.volunteer.add');
    }

    public function storeVolunteer(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required',
        ]);

        $volunteer = new Volunteer();
        $baseSlug = Str::slug($request->name, '-');
        $slug = $baseSlug;
        $counter = 1;
        while (Volunteer::where('slug', $slug)->exists()) {
            $slug = $baseSlug . '-' . $counter;
            $counter++;
        }
        $volunteer->slug = $slug;
        $volunteer->name = $request->name;
        $volunteer->designation = $request->designation;
        $volunteer->description = $request->designation;
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $time = md5(time()) . '.' . $photo->getClientOriginalExtension();
            $photo->move('site/uploads/volunteer/', $time);
            $volunteer->photo = $time;
        }
        $volunteer->save();
        alert::success('Success', 'Volunteer Added Successfully');
        return redirect()->route('manageVolunteer');
    }

    public function editVolunteer($slug)
    {
        $data = [
            'volunteer' => Volunteer::where('slug', $slug)->first()
        ];
        return view('admin.pages.volunteer.edit', $data);
    }

    public function updateVolunteer(Request $request, $slug)
    {
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'description' => 'required',
        ]);

        $volunteer = Volunteer::where('slug', $slug)->first();
        $volunteer->name = $request->name;
        $volunteer->designation = $request->designation;
        $volunteer->description = $request->designation;
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            unlink('site/uploads/volunteer/' . $volunteer->photo);
            $time = md5(time()) . '.' . $photo->getClientOriginalExtension();
            $photo->move('site/uploads/volunteer/', $time);
            $volunteer->photo = $time;
        }
        $volunteer->save();
        alert::success('Success', 'Volunteer Updated Successfully');
        return redirect()->route('manageVolunteer');
    }

    public function deleteVolunteer($slug)
    {
        $volunteer = Volunteer::where('slug', $slug)->first();
        unlink('site/uploads/volunteer/' . $volunteer->photo);
        $volunteer->delete();
        alert::success('Success', 'Volunteer Deleted Successfully');
        return redirect()->route('manageVolunteer');
    }
}
