<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function submit(Request $req)
    {
        $validation = $req->validate([
            'name' => 'required|min:3|max:50',
            'email' => 'required|email',
            'messege' => 'required|min:15|max:500',
        ]);
       
        $data = [
            'name' => $req->name,
            'email' => $req->email,
            'tel' => $req->tel,
            'messege' => $req->messege,
            'file' => $req->file('file')
        ];

        $to = 'des.rusetskaya@gmail.com';
        Mail::to($to)->send(new \App\Mail\TesMail($data));
        echo 'sent ok email';
        //return redirect()->route('contact');
        return redirect()->back()->withSuccess('Сообщение было успешно отправлено!');
        
    }
}
