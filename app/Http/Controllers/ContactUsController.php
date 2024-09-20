<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function contactUsView(Request $request)
    {
        return view('about-us.contact-us');
    }

    public function contactUsStore(Request $request)
    {
        $payload = $request->all();

        $request->validate([
            'fname'     =>  ['required'],
            'lname'     =>  ['required'],
            'email'     =>  ['required'],
            'mobile'    =>  ['required'],
            'country'   =>  ['required'],
        ]);
        DB::table('contact_us')->insert([
            "purpose"   =>  $request->get('purpose'),
            "title"     =>  $request->get('title'),
            "fname"     =>  $payload['fname'],
            "lname"     =>  $payload['lname'],
            "email"     =>  $payload['email'],
            "mobile"    =>  $payload['mobile'],
            "country"   =>  $payload['country'],
            "message"   =>  $payload['message'],
        ]);
        return redirect()->back()->with('success', 'Your message has been sent. Thank you!!');
    }
}
