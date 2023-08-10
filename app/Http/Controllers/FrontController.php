<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function send_mail(Request $request)
    {
        try {
            $name = $request['name'];
            $email = $request['email'];
            $phone = $request['phone'];
            $company = $request['company'];
            $subject = $request['subject'];
            $msg = $request['message'];

            $message = 'Name: ' . $name . "<br />";
            $message .= 'Phone: ' . $phone . "<br />";
            $message .= 'Company: ' . $company . "<br />";
            $message .= 'Email: ' . $email . "<br />";
            $message .= 'Subject: ' . $subject . "<br />";
            $message .= 'Message: ' . $msg . "<br />";

//            $email = (Settings::find(1))->email;
//            $email = 'donorrell996@gmail.com';
            $email = 'admin@opcparts.com';

            send_mail('admin@opcparts.com', $email, 'Customer Contact', $message);

            return redirect()->route('shop.home.index')->with('success', 'Email sent successfully!');
        } catch (\Exception $exception) {
            return redirect()->back()->with('errors', $exception->getMessage());
        }
    }
}
