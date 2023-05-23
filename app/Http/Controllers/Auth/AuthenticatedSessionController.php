<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Session;
class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        // if($request)
        // {
        //     $getUser = User::where('email', $request->email)->first();
        //     // dd($getUser);
        //     if($getUser != null || $getUser != '')
        //     {
        //         if($getUser->email_verified_at != null || $getUser->email_verified_at != '')
        //         {
        //             Session()->flush();
        //             return redirect(app()->getLocale() . 'login');
        //         }
        //     }
        // }
        // $validated = $request->validate([
        //     'email' => 'required',
        //     'password' => 'required',
        // ],
        // [
        //     'email.required' => trans('messages.Email field is required'),
        //     'password.required' => trans('Password field is required'),
        // ]);
        $request->authenticate();
        
        $request->session()->regenerate();
       
        if (Auth::user()->type == 1) 
        {
            return redirect(app()->getLocale() . '/admin/dashboard');
        }
        else if (Auth::user()->type == 0) 
        {
            if(Auth::user()->email_verified_at == null || Auth::user()->email_verified_at == '' )
            {
                Auth::logout();
                Session::flash('error', trans('messages.Email not verified.'));
                return redirect(app()->getLocale() . '/login');
            }
            else if(Auth::user()->status == 'Pending' || Auth::user()->status == 'Approval' || Auth::user()->status == 'Suspended' || Auth::user()->status == 'Banned')
            {
                Auth::logout();
                Session::flash('error', trans('messages.User Inactive.'));
                return redirect(app()->getLocale() . '/login');
            }
            else 
            {
                return redirect()->route('home');
            }
        }
        else
        {
            if(Auth::user()->email_verified_at == null || Auth::user()->email_verified_at == '' )
            {
                Auth::logout();
                Session::flash('error', trans('messages.Email not verified.'));
                return redirect(app()->getLocale() . '/login');
            }
            else if(Auth::user()->status == 'Pending' || Auth::user()->status == 'Approval' || Auth::user()->status == 'Suspended' || Auth::user()->status == 'Banned')
            {
                Auth::logout();
                Session::flash('error', trans('messages.User Inactive.'));
                return redirect(app()->getLocale() . '/login');
            }
            else
            {
                return redirect()->route('hostess_profile');
            }
        }
       
        // if(Auth::user()->role == 'Admin')
        // {
        //     return redirect('admin/dashboard');
        // }
        // elseif(Auth::user()->role == 'user')
        // {
        //     if(Auth::user()->user_type == 'user')
        //     {
        //         return redirect()->intended(RouteServiceProvider::HOME);
        //     }
        //     else{
        //         return redirect('/hostess_profile');
        //     } 
        // }
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
    
}
