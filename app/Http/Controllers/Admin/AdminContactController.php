<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class AdminContactController extends Controller
{
    public function manageContact()
    {
        $data=[
            'contact'=>Contact::first(),
        ];
        return view('admin.pages.contact.manage',$data);
    }

    public function updateContact(Request $request)
    {
        $request->validate([
            'message'=>'required',
            'address'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'openTime'=>'required',
        ]);

        $contact=Contact::first();
        $contact->message=$request->message;
        $contact->address=$request->address;
        $contact->email=$request->email;
        $contact->phone=$request->phone;
        $contact->openTime=$request->openTime;
        $contact->save();
        Alert::success('Success', 'Contact updated successfully');
        return redirect()->back();
    }

}
