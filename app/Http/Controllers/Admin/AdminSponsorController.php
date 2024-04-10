<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Sponsor;
class AdminSponsorController extends Controller
{
    public function manageSponsor()
    {
        $data=[
            'sponsors'=>Sponsor::all(),
        ];
    return view('admin.pages.sponsor.manage',$data);
    }

    public function addSponsor()
    {
        return view('admin.pages.sponsor.add');
    }

    public function storeSponsor(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'donation'=>'required',
            'photo'=>'required',
            'description'=>'required',
        ]);
        $sponsor=new Sponsor();
        $baseSlug = Str::slug($request->name, '-');
        $slug = $baseSlug;
        $counter = 1;
        while (Sponsor::where('slug', $slug)->exists()) {
            $slug = $baseSlug . '-' . $counter;
            $counter++;
        }
        $sponsor->slug = $slug;
        $sponsor->name = $request->name;
        $sponsor->donation = $request->donation;
        $sponsor->description = $request->description;
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $time = md5(time()) . '.' . $photo->getClientOriginalExtension();
            $photo->move('site/uploads/sponsor/', $time);
            $sponsor->photo = $time;
        }
        $sponsor->save();
        alert::success('Sponsor Added Successfully');
        return redirect()->route('manageSponsor');
    }

    public function editSponsor($slug)
    {
        $data = [
            'sponsor' => Sponsor::where('slug', $slug)->first(),
        ];
        return view('admin.pages.sponsor.edit', $data);
    }

    public function updateSponsor(Request $request, $slug)
    {
        $request->validate([
            'name'=>'required',
            'donation'=>'required',
            'description'=>'required',
        ]);
        $sponsor=Sponsor::where('slug',$slug)->first();
        $sponsor->name=$request->name;
        $sponsor->donation=$request->donation;
        $sponsor->description=$request->description;
        if($request->hasFile('photo')){
            $photo=$request->file('photo');
            unlink('site/uploads/sponsor/'.$sponsor->photo);
            $time=md5(time()).'.'.$photo->getClientOriginalExtension();
            $photo->move('site/uploads/sponsor/',$time);
            $sponsor->photo=$time;
        }
        $sponsor->save();
        alert::success('Sponsor Updated Successfully');
        return redirect()->route('manageSponsor');
    }

    public function deleteSponsor($slug)
    {
        $sponsor=Sponsor::where('slug',$slug)->first();
        if (file_exists('site/uploads/sponsor/' . $sponsor->photo)) {
            unlink('site/uploads/sponsor/' . $sponsor->photo);
        }
        $sponsor->delete();
        alert::success('Sponsor Deleted Successfully');
        return redirect()->route('manageSponsor');
    }

}
