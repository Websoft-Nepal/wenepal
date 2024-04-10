<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Term;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class AdminTermsController extends Controller
{
    public function manageTerms()
    {
        $data=[
            'terms' => Term::find(1),
        ];
        return view('admin.pages.terms.manage',$data);
    }

    public function updateTerms(Request $request)
    {
        $request->validate([
            'terms' => 'required',
        ]);

        $terms = Term::find(1);
        $terms->terms = $request->terms;
        $terms->save();
        alert::success('Terms updated successfully');
        return redirect()->back();
    }
}
