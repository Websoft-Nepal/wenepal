<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Term;
use Illuminate\Http\Request;

class TermsController extends Controller
{
    public function displayTerms()
    {
        $data=[
            'term' => Term::first(),
        ];
        return view('site.pages.terms', $data);
    }
}
