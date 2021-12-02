<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;


class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function signupshow()
    {
        //?----------------Sign Up Form View----------------
            return view('signup');
    }

    public function loginshow()
    {
        //?----------------Log In Form View----------------
            return view('login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        $data = new users();

        // $name = $request->file('file');

        // ?---------------Validation----------------
        $request->validate(
            [
                'name'=>'required|max:70',
                'username'=>'required|max:20',
                'email'=>'required|regex:/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/',
                'password'=>'required|min:5'
            ]
        );
        
        // *--------------Checking if user email already exist------------
        $dataemail = users::where("email","=",$request->email)->first();

        // *--------------Checking if user username already exist------------
        $datauser = users::where("username",'=',$request->username)->first();

        if($dataemail === null){
            if($datauser === null){
                
                //*--------------Adding User Data to Database---------------
                $data->name = $request->input('name');
                $data->username = $request->input('username');
                $data->email = $request->input('email');
                $data->password = $request->input('password');
                $data->save();

                // ?--------------Creating User Session ---------------------
                $request->session()->put("loguser",$data->username);
                return redirect('/');
            }else{
                // !---------------Error msg if username already exist ----------------------
                return back()->with('failuser','Sorry! This username already exist');
                // return redirect('signup');
            }
        }else{
            // !------------------Error msg if email already exist---------------------------
            return back()->with('failemail','Sorry! This email already exist');
            // return redirect('signup');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function imgupload(Request $req)
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
    public function checklogin(Request $request)
    {
        // ?----------------Validation-------------------
        $request->validate(
            [
                'usernam'=>'required|max:20',
                'pw'=>'required|min:5'
            ],
            [
                'usernam.required'=>'The username field is required.',
                'pw.required'=>'The password field is required.'
            ]
        );

        // ?----------------Searching For User-------------------
        $userdata = users::where("username","=",$request->usernam)->where("password","=",$request->pw)->first();

        // ?----------------Logging In User---------------------
        if(!$userdata){
            return back()->with("faillog","Sorry! This account was not found");
        }else{
            $request->session()->put("loguser",$userdata->username);
            return redirect('/');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //*-------------Logging Out User--------------
        if(session()->has('loguser')){
            session()->pull('loguser');
        }
        return redirect('land');
    }
}
