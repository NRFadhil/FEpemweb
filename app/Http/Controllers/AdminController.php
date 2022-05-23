<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function showValidateForm()
    {
        return view('admin.validate');
    }

    public function validateForm(Request $request)
    {
        $request->validate([
        'username' => 'required|string|min:5|max:5|in:admin',
        'password' =>  'required|string|min:5|max:5|in:admin'
        ]);

        //if($username == 'admin' && $password == 'admin'){
            return back()->with('success','Data valid');
        //}
    }
}
