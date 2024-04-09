<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function displayContact()
    {
        $data=[
            'contact'=>Contact::first()
        ];
        return view('site.pages.contact',$data);
    }
}
