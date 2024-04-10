<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallary;
use Illuminate\Http\Request;

class AdminGalleryController extends Controller
{
    public function manageGallery()
    {
        $data=[
            'galleries'=>Gallary::all(),
        ];
        return view('admin.pages.gallery.manage',$data);
    }

    public function addGallery()
    {
        return view('admin.pages.gallery.add');
    }
}
