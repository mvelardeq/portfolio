<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Psy\Readline\Hoa\Console;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'message' => 'required'
        ]);

        $mail = new ContactUsMailable($request->all());
        Mail::to('mvelardeq@uni.pe')->send($mail);

        return back()->with('message', 'Message sent it!');
    }
}
