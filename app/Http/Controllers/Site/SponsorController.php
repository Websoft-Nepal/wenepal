<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Sponsor;
use Illuminate\Http\Request;

class SponsorController extends Controller
{
    public function displaySponsor()
    {
        $data=[
            'sponsors' => Sponsor::all(),
        ];
        return view('site.pages.sponsor', $data);
    }
}
