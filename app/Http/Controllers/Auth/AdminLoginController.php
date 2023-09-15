<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminLoginController extends Controller
{
    public function loginpage() {
        return view('admin.login');
    }

    public function registerpage() {
        return view('admin.register');
    }

    public function login(Request $request) {
        $email = $request->email;
        $password = $request->password;

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            return redirect('admin/dashboard');            
        }
        return back();

    }
    public function register(Request $request)
    {
        $user = new User;
        $user->name = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request-> password);
        $user->role = 2;

        $user->save();
        
        return redirect('admin/login');
        
    }
    public function dashboard(Request $request)
    {
        return view('admin.dashboard');   
    }
}
