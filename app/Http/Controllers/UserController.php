<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MobilePrefix;

class UserController extends Controller
{
     public function index(){
        $prefix = MobilePrefix::select('prefix')->get();
        return view('user_signup', compact('prefix'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'mobileno' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6',
            // 'cpassword' => 'required',
            // 'marketing' => 'required',
            // 'privacy'   => 'required',

        ],
        [
            'name.required' => 'Name field is required',
            'surname.required' => 'Surname field is required',
            'mobileno.required' => 'Phone field is required',
            'email.required' => 'Email field is required',
            'password.required' => 'Password field is required',
            // 'cpassword.required' => 'Confirm password field is required',
            // 'marketing.required' => 'Please accept Marketing field',
            // 'privacy.required' => 'Please accept our privacy policy',

        ]);
    }
}
