<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Cause;
use App\Models\Blog;
use App\Models\Service;
use App\Models\Sponsor;
use App\Models\Team;
use App\Models\Volunteer;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function displayIndex()
    {
        $data=[
            'causes'=>Cause::all(),
            'services'=>Service::all(),
            'blogs'=>Blog::all(),
            'teams'=>Team::all(),
            'sponsors'=>Sponsor::all(),
            'volunteers'=>Volunteer::all(),
        ];
        return view('site.pages.index',$data);
    }
}
