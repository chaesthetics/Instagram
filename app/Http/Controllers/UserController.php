<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('instagram.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function profile()
    {
        $users = User::all();
        return view('instagram.profile')->with('users', $users);
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
            return redirect('login')->withErrors(['username' => 'Invalid credentials']);
        }
       
    }

    public function signUpPost(Request $request)
    {
        $user = new User; 

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

    public function userPost(Request $request, User $user)
    {
        
        // $post = new Post([
        //     'user_id' => Auth::user()->id, 
        //     'text' => $request->input('text'),
        //     'image' => $request->input('image'),
        // ]);
        
        // $user->posts()->save($post);

        $data= $request->all();
        $data['user_id'] = Auth::user()->id;
        $data['text'] = $request->input('text');
        
        $status=Post::create($data);

        if($status)
        {

        }
        // $post->user_id = Auth::user()->id;                   
        // $post->text = $request->text;
        // $post->image = null;
        // $post->save();
        
        $users = User::all();
        return redirect('home')->with('users', $users);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        User::create($input);
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
