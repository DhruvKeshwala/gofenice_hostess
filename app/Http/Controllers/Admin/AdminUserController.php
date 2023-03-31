<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\MobilePrefix;
use App\Services\UserService;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::get();
        return view('admin.users', compact('users'));
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function adminLogin()
    {
        return view('admin.login');
    }

    public function changeStatusUser(Request $request)
    {
        $user = User::find($request->id);
        if($user)
        {
            $user->update([
                'status'     => $request->status,
            ]);
            return json_encode(['success' => 1, 'message' => 'User has been deleted successfully']);
        }
        else
        {
            return json_encode(['success' => 1, 'message' => 'Something went wrong!!']);

        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id = null)
    {
        $user = UserService::getUserById($id);
        $prefix = MobilePrefix::select('prefix')->get();
        return view('admin.addUser', compact('user', 'id', 'prefix'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->only([
            'profilepic',
            'name',
            'surname',
            'email',
            'mobilenoprefix',
            'mobileno',
            'aboutme',
            'birthdate',
            'gender',
            'city',
        ]);

        if ($request->file('profilepic') != null) {
            $file      = $request->file('profilepic');
            $fileName = rand(11111, 99999) . time() . '.' . $file->extension();
            $name = $file->move(base_path('public/upload/user/profile/'), $fileName);
            $userDetails['profilepic'] = $fileName;
        }

        $userDetails['name']            =  $request->name;
        $userDetails['surname']         =  $request->surname;
        $userDetails['email']           =  $request->email;
        $userDetails['mobilenoprefix']  =  $request->mobilenoprefix;
        $userDetails['mobileno']        =  $request->mobileno;
        $userDetails['aboutme']         =  $request->aboutme;
        $userDetails['birthdate']       =  $request->birthdate;

        $userDetails['gender']          =  $request->gender;
        $userDetails['city']            =  $request->city;


        UserService::createUpdate($userDetails, $request->userId);
        return json_encode(['success' => 1, 'message' => 'User Saved Successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy(Request $request) 
    {
        $user = User::find($request->id);
        $user->delete();
        return json_encode(['success' => 1, 'message' => 'User has been deleted successfully']);
    }
}
