<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallary;
use Illuminate\Http\Request;

class AdminGallaryController extends Controller
{
    public function manageGallary()
    {
        $data=[
            'gallaries'=>Gallary::all()
        ];
        return view('admin.pages.gallary.manage',$data);
    }
}
