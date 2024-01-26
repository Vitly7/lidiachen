<?php

namespace App\Http\Controllers;
use App\Events\UserPush;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login', [
            'title' => 'Login'
        ]);
    }

    public function authenticate(Request $request)
   {
        $credentials = $request->validate([
            'email'=>'required|email:dns',
            'password'=>'required'
        ]);
       if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $email = $credentials['email'];

            $redirectResponse = redirect()->intended('/');
            event(new userpush($email)); 

            
       }
       return back()->with('loginError', 'login Gagal!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
