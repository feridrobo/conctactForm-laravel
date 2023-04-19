<?php

namespace App\Http\Controllers;
use Session;
use App\Notifications\SendContactNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class ContactController extends Controller
{
    public function showForm(){
        return view('contact.form');
    }

    public function sendEmail(Request $request){
        $this->validate($request, [
            'name' =>  'required|max:255|string',
            'email' => 'required|email|max:255',
            'message' => 'required']);

            Notification::route('mail','test@gmail.com')
                        ->notify(new SendContactNotification($request));

            Session::flash('succes', 'The email was send succesfully!');

        return redirect()->route('pages.index');
    }


}
