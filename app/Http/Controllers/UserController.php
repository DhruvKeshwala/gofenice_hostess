<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MobilePrefix;
use App\Models\User;
use Session, Hash;
use Carbon\Carbon;

class UserController extends Controller
{
    public function edit()
    {
        return view('profile');
    }

    public function update(User $user, Request $request)
    {   
        $request->only([
            'aboutme',
            'birthdate',
            'city',
            'gender',
            'profilepic'
        ]);

        if ($request->file('profilepic') != null) 
        {
            $file      = $request->file('profilepic');
            $fileName = rand(11111, 99999) . time() . '.' . $file->extension();
            $name = $file->move(base_path('public/upload/user/profile/'), $fileName);

            $user->update([
                'profilepic' => $fileName,
                'status'     => 'Pending'
            ]);
        }

        $user->update([
            'aboutme'   => $request->aboutme,
            'birthdate' => $request->birthdate,
            'city'      => $request->city,
            'gender'    => $request->gender,
            'updated_at'=> now()
        ]);

        Session::flash('success', 'Profile updated successfully'); 
        return redirect()->back();
    }

    // public function index()
    // {
    //     $prefix = MobilePrefix::select('prefix')->get();
    //     return view('user_signup', compact('prefix'));
    // }

    // public function store(Request $request)
    // {
    //     // dd($request->all());
    //     $validated = $request->validate([
    //         'name' => 'required',
    //         'surname' => 'required',
    //         'mobileno' => 'required',
    //         'email' => 'required|email|unique:users',
    //         'password' => 'required',
    //         // 'cpassword' => 'required',
    //         // 'marketing' => 'required',
    //         // 'privacy'   => 'required',
            
    //     ],
    //     [
    //         'name.required' => 'Name field is required',
    //         'surname.required' => 'Surname field is required',
    //         'mobileno.required' => 'Phone field is required',
    //         'email.required' => 'Email field is required',
    //         'password.required' => 'Password field is required',
    //         // 'cpassword.required' => 'Confirm password field is required',
    //         // 'marketing.required' => 'Please accept Marketing field',
    //         // 'privacy.required' => 'Please accept our privacy policy',
            
    //     ]);
    //     // dd($request->all());
    //     if($request)
    //     {
    //         $userDetails['name']    = $request->name;
    //         $userDetails['surname'] = $request->surname;
    //         $userDetails['mobilenoprefix'] = $request->mobilenoprefix;
    //         $userDetails['mobileno'] = $request->mobileno;
    //         $userDetails['email'] = $request->email;
    //         $userDetails['password'] = Hash::make($request->newPassword);
    //         $userDetails['marketing'] = $request->marketing;
    //         $userDetails['privacy'] = $request->privacy;
    //         $userDetails['mobile_verification_code'] = '0000'; //otp phone
    //         $userDetails['email_verification_code'] = '0000'; //otp email
    //         $result = User::create($userDetails);
    //         Session::flash('success', 'OTP has been sent on your number +' .  $userDetails['mobilenoprefix'] . $userDetails['mobileno']); 
    //         return redirect()->to('otpForm/'.$result->id);
    //     }
    //     Session::flash('success', 'Something went wrong!!'); 
    //     return redirect()->back();

    // }

    // public function otpForm($id)
    // {
    //     $user = User::where('id', $id)->first();
    //     return view('otpForm', compact('user'));
    // }

    // public function verifyOtp(Request $request)
    // {
    //      $validated = $request->validate([
    //         'otp' => 'required', 
    //     ],
    //     [
    //         'otp.required' => 'OTP required',        
    //     ]);
    //     if($request)
    //     {
    //         $user = User::where('id', $request->userId)->first();
    //         if($request->otp == $user->mobile_verification_code)
    //         {
    //             User::where('id',$user->id)->update(['mobile_verified_at'=>Carbon::now()->toDateTimeString(), 'status' => 'Active']);
    //             Session::flash('success', 'Phone number verified successfully');
    //             return redirect()->to('emailForm/'.$user->id);
    //         }
    //         else
    //         {
    //             Session::flash('success', 'Invalid OTP please enter valid code');
    //             return redirect()->back();
    //         }
    //     }
    // }

    // public function emailForm($id)
    // {
    //     $user = User::where('id', $id)->first();
    //     return view('emailForm', compact('user'));
    // }

    // public function verifyEmailOtp(Request $request)
    // {
    //     // dd($request->all());
    //      $validated = $request->validate([
    //         'otpEmail' => 'required', 
    //     ],
    //     [
    //         'otpEmail.required' => 'Email OTP required',        
    //     ]);
    //     if($request)
    //     {
    //         $user = User::where('id', $request->userId)->first();
    //         if($request->otpEmail == $user->email_verification_code)
    //         {
    //             User::where('id',$user->id)->update(['email_verified_at'=>Carbon::now()->toDateTimeString()]);
    //             Session::flash('success', 'Email verified successfully');
    //             return redirect()->back();
    //         }
    //         else
    //         {
    //             Session::flash('success', 'Invalid Email OTP please enter valid code');
    //             return redirect()->back();
    //         }
    //     }
    // }

}
