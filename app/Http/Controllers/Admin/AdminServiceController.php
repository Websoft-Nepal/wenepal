<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class AdminServiceController extends Controller
{
    public function manageService()
    {
        $data=[
            'services' => Service::all(),
        ];
        return view('admin.pages.service.manage', $data);
    }
    public function addService()
    {
        return view('admin.pages.service.add');
    }

    public function storeService(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'details' => 'required',
            'photo' => 'required',
        ]);

        $service = new Service();
        $baseSlug = Str::slug($request->title, '-');
        $slug = $baseSlug;
        $counter = 1;
        while (Service::where('slug', $slug)->exists()) {
            $slug = $baseSlug . '-' . $counter;
            $counter++;
        }
        $service->slug = $slug;
        $service->title = $request->title;
        $service->details = $request->details;
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $time = md5(time()) . '.' . $photo->getClientOriginalExtension();
            $photo->move('site/uploads/service/', $time);
            $service->photo = $time;
        }
        $service->save();
        alert::success('Service Added Successfully');
        return redirect()->route('manageService');
    }

    public function editService($slug)
    {
        $data = [
            'service' => Service::where('slug', $slug)->first(),
        ];
        return view('admin.pages.service.edit', $data);
    }

    public function updateService(Request $request, $slug)
    {
        $request->validate([
            'title' => 'required',
            'details' => 'required',
        ]);

        $service = Service::where('slug', $slug)->first();
        $baseSlug = Str::slug($request->title, '-');
        $slug = $baseSlug;
        $counter = 1;
        while (Service::where('slug', $slug)->exists()) {
            $slug = $baseSlug . '-' . $counter;
            $counter++;
        }
        $service->slug = $slug;
        $service->title = $request->title;
        $service->details = $request->details;
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            unlink('site/uploads/service/' . $service->photo);
            $time = md5(time()) . '.' . $photo->getClientOriginalExtension();
            $photo->move('site/uploads/service/', $time);
            $service->photo = $time;
        }
        $service->save();
        alert::success('Service Updated Successfully');
        return redirect()->route('manageService');
    }

    public function deleteService($slug)
    {
        $service = Service::where('slug', $slug)->first();
        unlink('site/uploads/service/' . $service->photo);
        Service::where('slug', $slug)->delete();
        alert::success('Service Deleted Successfully');
        return redirect()->route('manageService');
    }
}
