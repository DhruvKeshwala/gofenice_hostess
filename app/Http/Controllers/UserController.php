<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MobilePrefix;
use App\Models\User;
use App\Models\Message;
use Session, Hash, Auth;
use Carbon\Carbon;
use App\Models\Response;

class UserController extends Controller
{
    public function edit()
    {
        return view('profile');
    }

    public function update(Request $request)
    {   
        $request->only([
            'aboutme',
            'birthdate',
            'city',
            'gender',
            'profilepic'
        ]);
        $user = Auth::user();
        
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


        $user->aboutme      = $request->aboutme;
        $user->birthdate    = $request->birthdate;
        $user->city         = $request->city;
        $user->gender       = $request->gender;
        $user->updated_at   = now();
        $user->save();
        // $user->update([
        //     'aboutme'   => $request->aboutme,
        //     'birthdate' => $request->birthdate,
        //     'city'      => $request->city,
        //     'gender'    => $request->gender,
        //     'updated_at'=> now()
        // ]);

        Session::flash('success', 'Profile updated successfully'); 
        return redirect()->back();
    }

    public function paymentSuccess(){
        return view('payment-success');
    }

    public function saveResponse(Request $request)
    {
        if($request)
        {
            $responseDetails = new Response();
            $response = json_decode($request->response);
            if($response != null || $response != '')
            {
                $existing = Response::where('payment_id',$response->id)->get();
                if (count($existing) <= 0) {
                    $responseDetails->user_id          =  Auth::id();
                    $responseDetails->payment_id       =  $response->id;
                    $responseDetails->amount           =  $response->amount;
                    $responseDetails->status           =  $response->status;
                    $responseDetails->save();
                    
                    $messageDetails['sender_id'] = Auth::id();
                    $messageDetails['receiver_id'] = $request->receiver_hostess_id;
                    $messageDetails['message'] = $request->message_body;
                    Message::create($messageDetails);
                   
                    $users = User::where('id', Auth::id())->first();
                    $total_credits = (int)$request->credits + $users-> credit;
                    $credits = ['credit' => $total_credits];
                    $user = User::where('id', Auth::id())->update($credits);
                }

                return json_encode(['success' => 1, 'message' => 'Your Payment done successfully..!']);
            }
        }
    }

    public function userChat($lang, $id = null)
    {
        // For User list
        $user = auth()->user(); 
        if(@$user->id != null || @$user->id != '')
        {
            $selectedUser = User::where('id',$id)->first();
            
            $messages = Message::where('sender_id', $user->id)->orWhere('receiver_id', $user->id)->get();
            $chat_list=[];
            foreach($messages as $message){
                if($message->receiver_id != $user->id)
                { 
                    $chat_list[$message->receiver_id][]=$message ;
                }elseif($message->sender_id !=$user->id){
                    $chat_list[$message->sender_id][]=$message ;
                }
            }
            $users=[];
            foreach($chat_list as $user_id => $messages)
            {
                $user=User::find($user_id);
                $users[]= [
                    'id'=> $user->id ,
                    'name'=> $user->name ,
                    'profilepic'=>$user->profilepic ,
                    'last_message' =>last($messages)->message ,
                    'created_at'=> last($messages)->created_at
                ];
            }
                
            // $users = User::whereHas('messages', function ($query) use ($user) {
            // $query->where('sender_id', $user->id);
            // })->orWhereHas('messages', function ($query) use ($user) {
            //     $query->where('receiver_id', $user->id);
            // })->get();

            // For message
            $authUser = auth()->user();
            $messages = Message::where(function ($query) use ($authUser, $id) {
            $query->where('sender_id', $authUser->id)
                ->where('receiver_id', $id);
            })->orWhere(function ($query) use ($authUser, $id) {
                $query->where('sender_id', $id)
                    ->where('receiver_id', $authUser->id);
            })->orderBy('id')->get();

            return view('userChat', compact('users', 'selectedUser', 'messages'));
        }
        else
        {
            return redirect(app()->getLocale() . '/login');
        }
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
