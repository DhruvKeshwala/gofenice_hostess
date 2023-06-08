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
    //         'mobileno' => ['required', 'string', 'max:255', 'unique:'.User::class],
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
            'mobileno' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password',
            'marketing' => 'required',
            'privacy'   => 'required',
            
        ],
        [
            'name.required' => 'Name field is required',
            'surname.required' => 'Surname field is required',
            'mobileno.required' => 'Phone field is required',
            'mobileno.unique' => 'This Phone Number is already using',
            'email.required' => 'Email field is required',
            'email.unique' => 'Email is already exist',
            'email.email'   => 'Invalid Email Please enter valid email',
            'password.required' => 'Password field is required',
            'password.min' => 'Minimum 8 characters required',
            'password_confirmation.required' => 'Confirm password field is required',
            'password_confirmation.same' => 'Password mismatched please enter valid password',
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
                if($request->credit == null || $request->credit == '')
                    $userDetails['credit']    = 0;
                else
                    $userDetails['credit']    = $request->credit;
                $userDetails['type'] = 2;
            }
            else 
            {
                $userDetails['type']      = 0;
                $userDetails['credit']    = 0;
            }
            $userDetails['user_type'] = $request->user_type;
            $result = User::create($userDetails);
            Session::flash('success', trans('messages.Verification Code has been sent on your mail')); 
            if($request->user_type == 'hostess'){
                return redirect()->to(app()->getLocale() . '/step2Form/'.$result->id);
                // return redirect()->to(app()->getLocale() . '/emailForm/'.$result->id);

            }
            else{
                // return redirect()->to(app()->getLocale() . '/otpForm/'.$result->id);
                return redirect()->to(app()->getLocale() . '/emailForm/'.$result->id);

            }
        }
        Session::flash('error', trans('messages.Something went wrong!!')); 
        return redirect()->back();
    }

    public function registerStep2(Request $request)
    {
        $validated = $request->validate([
            'city'      => 'required',
            'services'  => 'required',
            'wing_type' => 'required',
            
        ],
        [
            'city.required'         => 'City is required',
            'services.required'     => 'Services is required',
            'wing_type.required'    => 'Wing Type is required',
            
        ]);
        
        if($request)
        {
            $services    = implode(",",$request->services);
            $city = $request->city;
            $wing_type = $request->wing_type;
            $userId = $request->userId;
            $result = User::where('id',$userId)->update(['services'=>$services,'city'=>$city,'wing_type'=>$wing_type]);
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
            Session::flash('success', trans('messages.Verification Code has been sent on your mail')); 
            return redirect()->to(app()->getLocale() . '/emailForm/'.$userId);
        }
        Session::flash('error', trans('messages.Something went wrong!!')); 
        return redirect()->back();
    }

    public function otpForm()
    {
        // dd($id);
        // $user = User::where('id', $id)->first();
        return view('otpForm');
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
            'otp.required' => trans('messages.Verification Code required'),        
        ]);
        if($request)
        {
            $user = User::where('id', $request->userId)->first();
            
            if($request->otp === $user->mobile_verification_code)
            {
                User::where('id',$user->id)->update(['mobile_verified_at'=>Carbon::now()->toDateTimeString(), 'status' => 'Active']);
                //Session::flash('success', 'Phone number verified successfully');
                //return redirect()->to('emailForm/'.$user->id);
                Session::flash('success', trans('messages.Phone number verified successfully, Reset your password '));
		        return redirect(app()->getLocale() . '/reset-password/' . $user->id);
            }
            else
            {
                Session::flash('error', trans('messages.Invalid Verification Code please enter valid code'));
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
            'otpEmail.required' => trans('messages.Email Verification Code required'),        
        ]);
        if($request)
        {
            $user = User::where('id', $request->userId)->first();
            if($request->otpEmail === $user->email_verification_code)
            {
                User::where('id',$user->id)->update(['email_verified_at'=>Carbon::now()->toDateTimeString()]);
                Session::flash('success', trans('messages.Email verified successfully'));
                return redirect(app()->getLocale() . '/login');
            }
            else
            {
                Session::flash('error', trans('messages.Invalid Email Verification Code please enter valid code'));
                return redirect()->back();
            }
        }
    }

    public function resetPassword()
    {
        return view('reset-password');
    }

    public function saveResetPassword(Request $request)
    {
        $validated = $request->validate([
            'newPassword' => 'required', 
            'confirmPassword' => 'required', 

        ],
        [
            'newPassword.required' => trans('messages.New Password required'),
            'confirmPassword.required' => trans('messages.Confirm Password required'),        

        ]);
        if($request)
        {
            $newPassword = $request->newPassword;
            $confirmPassword = $request->confirmPassword;
            if($confirmPassword != $newPassword)
            {
                Session::flash('error', trans('messages.Password Mismatched Please Enter Valid Confirm Password'));
            }
            else
            {
                if($request->userId != null || $request->userId != '')
                {
                    User::whereId($request->userId)->update([
                        'password' => Hash::make($request->confirmPassword)
                    ]);
                    Session::flash('success', trans('messages.Password Changed Successfully'));
                    return redirect(app()->getLocale() . '/login');
                }
            }
        }
        return redirect()->back();
    }
}
