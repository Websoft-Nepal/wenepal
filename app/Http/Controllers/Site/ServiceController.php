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
            'causes'=>Cause::all(),
            'services'=>Service::all(),
        ];
        return view('site.pages.service',$data);
    }
}
