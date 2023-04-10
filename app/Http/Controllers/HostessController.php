<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HostessController extends Controller
{
    public function updateProfile()
    {
        return view('hostess_profile');
    }
}
