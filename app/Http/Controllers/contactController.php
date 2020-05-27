<?php

namespace App\Http\Controllers;

use App\Mail\NewContactWelcomeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class contactController extends Controller
{
    //


    public function index()
    {
        $bodyClass = 'contact-us';
        $title='Contact Us';
        return view('contact-us', compact(['bodyClass','title']));
    }
    public function send()
    {
        $data=\request()->validate([
            'name'=>'required',
            'email'=>'required|email',
            'address'=>'required',
            'telephone_number'=>'required',
            'message' => 'nullable',
        ]);


        Mail::to('thuyoanh21790@gmail.com')->send(new NewContactWelcomeMail($data));
        return redirect()->back()->withSuccess('Thank you for contacting Maxwell Financial Services we will contact you within 24 hours
        , we have sent you a welcome mail please check your junk mail if you didnt receive it.');
    }
}
