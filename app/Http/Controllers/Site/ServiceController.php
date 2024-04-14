<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Cause;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function displayService()
    {
        $data=[
            'services'=>Service::latest()->paginate(8),
        ];
        return view('site.pages.service',$data);
    }

    public function displayServiceDetails($slug)
    {
        $data=[
            'service'=>Service::where('slug',$slug)->first(),
            'services'=>Service::all(),
        ];
        return view('site.pages.serviceDetail',$data);
    }

    public function displayCause()
    {
        $data=[
            'causes'=>Cause::latest()->paginate(8),
        ];
        return view('site.pages.cause',$data);
    }

    public function displayCauseDetails($slug)
    {
        $data=[
            'cause'=>Cause::where('slug',$slug)->first(),
            'causes'=>Cause::all(),
        ];
        return view('site.pages.causeDetail',$data);
    }
}
