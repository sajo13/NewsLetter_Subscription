<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;


class AuthController extends Controller
{
    public function show()
    {
        return view('login');
    }

    public function login()
    {
        validator(request()->all(),[
            'email' => ['required', 'email'],
            'password' => ['required']
        ])->validate();
        //check user login
        if (auth()->attempt(request()->only(['email', 'password']))) {
            return redirect('/dashboard');
        }
        return redirect()->back()->withErrors(['email' => 'Invalid credantials!']);
    }   
    
    public function logOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }

}
