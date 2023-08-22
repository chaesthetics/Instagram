<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserInfo;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = UserInfo::all();
        return view('instagram.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function signup()
    {
        return view('instagram.signup');
    }

    public function signin()
    {
        return view('instagram.signin');
    }

    public function signInPost(Request $request)
    {
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('home');
        } else {
            return redirect('signin')->withErrors(['username' => 'Invalid credentials']);
        }
    }

    public function signUpPost(Request $request)
    {
        $user = new UserInfo; 

        $passwordHash = Hash::make($request->password);
        
        $user->username = $request->username;
        $user->fullname = $request->fullname;
		$user->password = $passwordHash;
		$user->save();  

        return redirect('signin')->with('flash_message', 'User is Added!');
    }

    public function logout()
    {
        return redirect('login')->with(Auth::logout());
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        UserInfo::create($input);
        return redirect('instagram')->with('flash_message', 'User is added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
