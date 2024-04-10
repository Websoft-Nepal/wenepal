<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Policy;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class AdminPolicyController extends Controller
{
    public function managePolicy()
    {
        $data=[
            'policy' => Policy::first(),
        ];
        return view('admin.pages.policy.manage',$data);
    }

    public function updatePolicy(Request $request)
    {
        $request->validate([
            'policy' => 'required',
        ]);

        $policy = policy::find(1);
        $policy->policy = $request->policy;
        $policy->save();
        alert::success('Policy updated successfully');
        return redirect()->back();
    }
}
