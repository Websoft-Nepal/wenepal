<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class AdminTeamController extends Controller
{
    public function manageTeam()
    {
        $data=[
            'teams' => Team::all(),
        ];
        return view('admin.pages.team.manage', $data);
    }

    public function addTeam()
    {
        return view('admin.pages.team.add');
    }

    public function storeTeam(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'post' => 'required',
            'photo' => 'required',
        ]);

        $team = new Team();
        $baseSlug = Str::slug($request->name, '-');
        $slug = $baseSlug;
        $counter = 1;
        while (Team::where('slug', $slug)->exists()) {
            $slug = $baseSlug . '-' . $counter;
            $counter++;
        }
        $team->slug = $slug;
        $team->name = $request->name;
        $team->post = $request->post;
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $time = md5(time()) . '.' . $photo->getClientOriginalExtension();
            $photo->move('site/uploads/team/', $time);
            $team->photo = $time;
        }
        if ($request->email) {
            $team->email = $request->email;
        }
        if ($request->facebook) {
            $team->facebook = $request->facebook;
        }
        if ($request->twitter) {
            $team->twitter = $request->twitter;
        }
        if ($request->instagram) {
            $team->instagram = $request->instagram;
        }
        $team->save();
        alert::success('Team Member Added Successfully');
        return redirect()->route('manageTeam');
    }

    public function editTeam($slug)
    {
        $data = [
            'team' => Team::where('slug', $slug)->first(),
        ];
        return view('admin.pages.team.edit', $data);
    }

    public function updateTeam(Request $request, $slug)
    {
        $request->validate([
            'name' => 'required',
            'post' => 'required',
        ]);

        $team = Team::where('slug', $slug)->first();
        $baseSlug = Str::slug($request->name, '-');
        $slug = $baseSlug;
        $counter = 1;
        while (Team::where('slug', $slug)->exists()) {
            $slug = $baseSlug . '-' . $counter;
            $counter++;
        }
        $team->slug = $slug;
        $team->name = $request->name;
        $team->post = $request->post;
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            unlink('site/uploads/team/' . $team->photo);
            $time = md5(time()) . '.' . $photo->getClientOriginalExtension();
            $photo->move('site/uploads/team/', $time);
            $team->photo = $time;
        }
        if ($request->email) {
            $team->email = $request->email;
        }
        if ($request->facebook) {
            $team->facebook = $request->facebook;
        }
        if ($request->twitter) {
            $team->twitter = $request->twitter;
        }
        if ($request->instagram) {
            $team->instagram = $request->instagram;
        }
        $team->save();
        alert::success('Team Member Updated Successfully');
        return redirect()->route('manageTeam');
    }

    public function deleteTeam($slug)
    {
        $team = Team::where('slug', $slug)->first();
        unlink('site/uploads/team/' . $team->photo);
        $team->delete();
        alert::success('Team Member Deleted Successfully');
        return redirect()->route('manageTeam');
    }
}
