<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function dashboard(){
        return view('dashboard');
    }

    public function login(Request $request){
        $login = $request->validate([
            'email'     => 'required | email',
            'password'  => 'required | min:5',
        ]);

        if (Auth::attempt($login)) {
            // return redirect()->route('dashboard');
            return view('dashboard');
        }else {
            return redirect()->route('login');
        }
        
    }
    
    public function register(Request $request){
        $data = $request->validate([
            'name'                 => 'required',
            'email'                => 'required | email',
            'age'                  => 'required',
            'role'                 => 'required',
            'password'             => 'required | min:5',
            // 'password_confirmation'=> 'required | min:5',
        ]);

        $users = User::create($data);

        return redirect()->route('login');
    }

    public function logout(){
        Auth::logout();
        return redirect('login');
    }
}
