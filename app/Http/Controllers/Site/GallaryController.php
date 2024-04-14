<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Gallary;
use Illuminate\Http\Request;

class GallaryController extends Controller
{
    public function displayGallery()
    {
        $data=[
            'galleries'=>Gallary::with('photos')->get(),
        ];
        return view('site.pages.gallary',$data);
    }
}
