<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Team;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function displayAbout()
    {
        $data=[
            'about'=>About::first(),
            'teams'=>Team::all(),
        ];
        return view('site.pages.about',$data);
    }
}
