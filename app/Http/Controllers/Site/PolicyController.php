<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Policy;
use Illuminate\Http\Request;

class PolicyController extends Controller
{
    public function displayPolicy()
    {
        $data=[
            'policy' => Policy::first(),
        ];
        return view('site.pages.policy', $data);
    }

}
