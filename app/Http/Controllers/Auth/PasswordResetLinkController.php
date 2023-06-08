<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\View\View;
use App\Models\User;
use Session;

class PasswordResetLinkController extends Controller
{
    /**
     * Display the password reset link request view.
     */
    public function create(): View
    {
        return view('forgot-password');
    }

    /**
     * Handle an incoming password reset link request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        // dd($request->all());
        $validated = $request->validate([
            'mobileno' => 'required',
        ],
        [
            'mobileno.required' => 'Phone field is required',
        ]);
        if($request)
        {
            $userDetails['mobileno'] = $request->mobileno;
            $userDetails['mobile_verification_code'] = '0000'; //otp phone
           
            $getUser    = User::where('mobileno', $request->mobileno)->first();
            
            if($getUser != null || $getUser != '')
            {
                $updateUser = User::where('mobileno', $request->mobileno)->update($userDetails);
               
                Session::flash('success', trans('messages.Verification Code has been sent on your number')); 
                return redirect()->to(app()->getLocale() . '/otpForm/'.$getUser->id);
            }
        }
        Session::flash('error', trans('messages.Mobile number is not registered!!')); 
        return redirect()->back();
    }
    
}
