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
        'username' => 'required|"admin"',
        'password' =>  'required|"admin"'
        ]);

        return back()->with('success','Data valid');
    }
}
