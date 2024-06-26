<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendRequest;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function welcome() {
        return view('welcome');
    }
    public function profile($id) {
        return view('profile',compact('id'));
    }
    public function form() {
        return view('pages.form');
    }
    public function send(SendRequest $request) {
        $data=[
            "email"=> $request->email,
        "message"=>$request->message];
        Mail::to('prova@mail.com')->send(new SendMail($data));
        return redirect('/');
    }
}

