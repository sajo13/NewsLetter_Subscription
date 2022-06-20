<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Mail;
use App\Models\User;

class MailController extends Controller
{
    
    public function home()
    {
        return view('welcome');
    }

    public function mailSave(Request $request) 
    {
        $storeData = $request->validate([
            'email' => 'required|email|unique:users'
        ]);
        $storeData['is_subscribed'] = 1;
        
        $mail = Mail::create($storeData);
        return view('welcome')
            ->with(['is_subscibed'=>'NewsLetter Successfully Subscribed!']);
    }
}
