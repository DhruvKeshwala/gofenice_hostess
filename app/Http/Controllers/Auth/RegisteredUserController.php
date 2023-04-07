<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Models\MobilePrefix;
use Session;
use Carbon\Carbon;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $prefix = MobilePrefix::select('prefix')->get();
        return view('auth.register',compact('prefix'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    // public function store(Request $request): RedirectResponse
    // {
    //     $request->validate([
    //         'name' => ['required', 'string', 'max:255'],
    //         'surname' => ['required', 'string', 'max:255'],
    //         'mobilenoprefix' => ['required', 'string', 'max:255'],
    //         'mobileno' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
    //         'password' => ['required', 'confirmed', Rules\Password::defaults()],
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

    //     $user = User::create([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'password' => Hash::make($request->password),
    //     ]);

    //     event(new Registered($user));

    //     Auth::login($user);

    //     return redirect(RouteServiceProvider::HOME);
    // } 

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'mobileno' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
            // 'password_confirmation' => 'required',
            'marketing' => 'required',
            'privacy'   => 'required',
            
        ],
        [
            'name.required' => 'Name field is required',
            'surname.required' => 'Surname field is required',
            'mobileno.required' => 'Phone field is required',
            'email.required' => 'Email field is required',
            'password.required' => 'Password field is required',
            // 'password_confirmation.required' => 'Confirm password field is required',
            'marketing.required' => 'Please accept Marketing field',
            'privacy.required' => 'Please accept our privacy policy',
            
        ]);
        if($request)
        {
            $userDetails['name']    = $request->name;
            $userDetails['surname'] = $request->surname;
            $userDetails['mobilenoprefix'] = $request->mobilenoprefix;
            $userDetails['mobileno'] = $request->mobileno;
            $userDetails['email'] = $request->email;
            $userDetails['password'] = Hash::make($request->password);
            $userDetails['marketing'] = $request->marketing;
            $userDetails['privacy'] = $request->privacy;
            $userDetails['mobile_verification_code'] = '0000'; //otp phone
            $userDetails['email_verification_code'] = '0000'; //otp email
            $userDetails['role'] = 'user';
            $userDetails['status'] = 'Active';
            if($request->user_type == 'hostess')
            {
                $userDetails['birthdate'] = $request->birthday_year."-".$request->birthday_month."-".$request->birthday_day;
            }
            $userDetails['user_type'] = $request->user_type;
            $result = User::create($userDetails);
            Session::flash('success', 'OTP has been sent on your number +' .  $userDetails['mobilenoprefix'] . $userDetails['mobileno']); 
            if($request->user_type == 'hostess'){
                return redirect()->to('step2Form/'.$result->id);
            }
            else{
                return redirect()->to('otpForm/'.$result->id);
            }
        }
        Session::flash('success', 'Something went wrong!!'); 
        return redirect()->back();
    }

    public function registerStep2(Request $request)
    {
        $validated = $request->validate([
            'city' => 'required',
            'services' => 'required',
            
        ],
        [
            'city.required' => 'City is required',
            'services.required' => 'Services is required',
            
        ]);
        
        if($request)
        {
            $services    = implode(",",$request->services);
            $city = $request->city;
            $userId = $request->userId;
            $result = User::where('id',$userId)->update(['services'=>$services,'city'=>$city]);
            if ($request->file('profilepic') != null) 
            {
                $file      = $request->file('profilepic');
                $fileName = rand(11111, 99999) . time() . '.' . $file->extension();
                $name = $file->move(base_path('public/upload/user/profile/'), $fileName);

                User::where('id',$userId)->update([
                    'profilepic' => $fileName
                ]);
            }
            $user = User::where('id', $userId)->first();
            Session::flash('success', 'OTP has been sent on your number +' .  $user->mobilenoprefix . $user->mobileno); 
            return redirect()->to('otpForm/'.$userId);
        }
        Session::flash('success', 'Something went wrong!!'); 
        return redirect()->back();
    }

    public function otpForm($id)
    {
        $user = User::where('id', $id)->first();
        return view('otpForm', compact('user'));
    }
    public function step2Form($id){
        $user = User::where('id', $id)->first();
        return view('step2Form', compact('user'));
    }

    public function verifyOtp(Request $request)
    {
         $validated = $request->validate([
            'otp' => 'required', 
        ],
        [
            'otp.required' => 'OTP required',        
        ]);
        if($request)
        {
            $user = User::where('id', $request->userId)->first();
            if($request->otp == $user->mobile_verification_code)
            {
                User::where('id',$user->id)->update(['mobile_verified_at'=>Carbon::now()->toDateTimeString(), 'status' => 'Active']);
                Session::flash('success', 'Phone number verified successfully');
                return redirect()->to('emailForm/'.$user->id);
            }
            else
            {
                Session::flash('success', 'Invalid OTP please enter valid code');
                return redirect()->back();
            }
        }
    }

    public function emailForm($id)
    {
        $user = User::where('id', $id)->first();
        return view('emailForm', compact('user'));
    }

    public function verifyEmailOtp(Request $request)
    {
         $validated = $request->validate([
            'otpEmail' => 'required', 
        ],
        [
            'otpEmail.required' => 'Email OTP required',        
        ]);
        if($request)
        {
            $user = User::where('id', $request->userId)->first();
            if($request->otpEmail == $user->email_verification_code)
            {
                User::where('id',$user->id)->update(['email_verified_at'=>Carbon::now()->toDateTimeString()]);
                Session::flash('success', 'Email verified successfully');
                return redirect()->back();
            }
            else
            {
                Session::flash('success', 'Invalid Email OTP please enter valid code');
                return redirect()->back();
            }
        }
    }
}
