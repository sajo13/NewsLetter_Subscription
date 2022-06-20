<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
// use App\Models\Mail;
use TblMail;
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
        
        $mail = TblMail::create($storeData);
        return view('welcome')
            ->with(['is_subscibed'=>'NewsLetter Successfully Subscribed!']);
    }

    public function mailUnsubscribe()
    {
        $postData = TblMail::find(1);
        $postData->is_subscribed = 0;
        $postData->save();

        return view('welcome')
            ->with(['is_subscibed'=>'NewsLetter Successfully UnSubscribed!']);
    }
}
