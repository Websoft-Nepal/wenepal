<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Volunteer;
use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    public function displayVolunteer()
    {
        $data=[
            'volunteers' => Volunteer::all(),
        ];
        return view('site.pages.volunteer', $data);
    }
}
