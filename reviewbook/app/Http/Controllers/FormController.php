<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function welcome(Request $request)
    {
        $fname = $request->input('fname');
        $lname = $request->input('lname');
        $fullname = $request->input('fname') . $request->input('lname');

        return view('welcome', ["fname" => $fname, "lname" => $lname, "fullname" => $fullname]);
    }
}
