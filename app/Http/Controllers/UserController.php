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
    
    public function index()
    {
    

        $allPost = Post::with('user')->get();
        
        $suggested = User::all()->except(Auth::user()->id)->random(5);

        $suggested->map(function($suggested){
            $initials = explode(' ', $suggested->fullname);
            $firsts = mb_substr($initials[0], 0, 1);
            $lasts = mb_substr(end($initials), 0, 1);
            $initials = $firsts.$lasts;
            $suggested['initials'] = $initials;   
            
            $posts = user::find($suggested->id)->posts;
            $value = count($posts);
            
            if($value>=3){
                $suggested['p0'] = $posts[$value-1]->image;
                $suggested['p1'] = $posts[$value-2]->image;
                $suggested['p2'] = $posts[$value-3]->image;
            }
            elseif($value==2){
                $suggested['p0'] = $posts[$value-1]->image;
                $suggested['p1'] = $posts[$value-2]->image;
            }
            elseif($value==1){
                $suggested['p0'] = $posts[$value-1]->image;
            }
            else{
                $suggested['p0'] = '';
                $suggested['p1'] = '';
                $suggested['p2'] = '';    
            }
        });
       
        $full_name = Auth::user()->fullname;
        
        $initial = explode(' ', $full_name);
        $first = mb_substr($initial[0], 0, 1);
        $last = mb_substr(end($initial), 0, 1);
        $initial = $first.$last;
        
        
        $allPost->map(function($allPost){

            $posts = User::find($allPost->user_id)->posts;
    
            $fullnames = $allPost->user->fullname; 
            $initials = explode(' ', $fullnames);
            $firsts = mb_substr($initials[0], 0, 1);
            $lasts = mb_substr(end($initials), 0, 1);
            $initials = $firsts.$lasts;
            $allPost['initials'] = $initials;    
            $value = count($posts);
            
            if($value>=3){
                $allPost['p0'] = $posts[$value-1]->image;
                $allPost['p1'] = $posts[$value-2]->image;
                $allPost['p2'] = $posts[$value-3]->image;
            }
            elseif($value==2){
                $allPost['p0'] = $posts[$value-1]->image;
                $allPost['p1'] = $posts[$value-2]->image;
            }
            elseif($value==1){
                $allPost['p0'] = $posts[$value-1]->image;
            }
            else{
                $allPost['p0'] = '';
                $allPost['p1'] = '';
                $allPost['p2'] = '';    
            }
        });

        return view('instagram.index')->with('posts', $allPost)->withAuthor($initial)->with('suggestions', $suggested);

    }

    public function profile()
    {
        $posts = User::find(Auth::user()->id)->posts;
        
        $full_name = Auth::user()->fullname;
        $initial = explode(' ', $full_name);
        $first = mb_substr($initial[0], 0, 1);
        $last = mb_substr(end($initial), 0, 1);
        $initial = $first.$last;
        
        return view('instagram.profile')->with('posts', $posts)->withAuthor($initial);
    }

    public function profileview($userid)
    {
        $posts = User::find($userid)->posts;
        $user = User::find($userid);
        
        $full_name = $user->fullname;
        $initial = explode(' ', $full_name);
        $first = mb_substr($initial[0], 0, 1);
        $last = mb_substr(end($initial), 0, 1);
        $initial = $first.$last;
        
        return view('instagram.profileview')->with('posts', $posts)->withAuthor($initial)->with('userinfo', $user);
    }


    public function edit_profile()
    {
        $user = User::all();
        
        $full_name = Auth::user()->fullname;
        $initial = explode(' ', $full_name);
        $first = mb_substr($initial[0], 0, 1);
        $last = mb_substr(end($initial), 0, 1);
        $initial = $first.$last;
        
        return view('instagram.edit_profile')->with('user', $user)->withAuthor($initial);
    }

    public function change_password()
    {
        $user = User::all();
        $full_name = Auth::user()->fullname;
        $initial = explode(' ', $full_name);
        $first = mb_substr($initial[0], 0, 1);
        $last = mb_substr(end($initial), 0, 1);
        $initial = $first.$last;
        
        return view('instagram.change_password')->with('user', $user)->withAuthor($initial);
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

        return redirect('login')->with('flash_message', 'User is Added!');
    }

    public function logout()
    {
        return redirect('login')->with(Auth::logout()); 
    }

    public function userPost(Request $request, User $user)
    {
        
        $data= $request->all();

        $filename = '';
    
        if($request->hasFile('image')){
            $filename = $request->getSchemeAndHttpHost() . '/assets/img/' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/assets/img/'), $filename);
        }

        $data['user_id'] = Auth::user()->id;
        $data['text'] = $request->input('text');
        $data['image'] = $filename;
        
        $status=Post::create($data);
        
        $users = User::all();
    
        return redirect()->back()->with('users', $users);
    }

    public function update_user(Request $request)
    {
        $user = User::all();
        $user = User::find(Auth::user()->id);
        
        $filename = '';
        
        if($request->hasFile('avatar')){
            $filename = $request->getSchemeAndHttpHost() . '/assets/img/' . time() . '.' . $request->avatar->extension();
            $request->avatar->move(public_path('/assets/img/'), $filename);
        }else{
            $filename = Auth::user()->avatar;
        }
        
        $user->update([
            'username' => $request->username,
            'fullname' => $request->fullname,
            'bio' => $request->bio,
            'email' => $request->email,
            'avatar' => $filename,
        ]);

        $posts = User::find(Auth::user()->id)->posts;
        $full_name = Auth::user()->fullname;
        $initial = explode(' ', $full_name);
        $first = mb_substr($initial[0], 0, 1);
        $last = mb_substr(end($initial), 0, 1);
        $initial = $first.$last;
        return redirect('profile')->with('posts', $posts)->withAuthor($initial);

    }

}
