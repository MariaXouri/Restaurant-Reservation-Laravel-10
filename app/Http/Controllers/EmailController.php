<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\Email;
use DateTime;
use Mail;

class EmailController extends Controller
{
    public function cuisineEmail()
    {

        // MAIL()
        ini_set('SMTP', 'localhost');
        ini_set('smtp_port', 1025);

        $to = 'mariaxouri11@gmail.com';
        $subject = "Email! Bro";
        $body = "Hi!  Email to Local Cuisine";
        $headers = "From: admin@laravel.com" . "\r\n";


        $a = mail($to, $subject, $body, $headers);



        return response()->json(['a' => $a]);

    }


    public function emailstore(Request $request)
    {
        $email = new Email();

        // Store email

        $to1 = $email->to = "admin@gmail.com";
        $headers1 = $email->headers = $request->input('headers');
        $subject1 = $email->subject = $request->input('subject');
        $body1 = $email->body = $request->input('body');


        $email->save();



        $contactform = $request->json()->all();

        $data = array(
            'headers' => $email->headers,
            'to' => $email->to,
            'subject' => $email->subject,
            'body' => $email->body,

        );

        Mail::send('email', $data, function ($message) use ($data) {
            $message->from($data['headers'], 'Email Form');
            $message->sender($data['headers'], 'Email Form');
            $message->to($data['to'], "Email Form");
            $message->subject($data['subject']);
        });





        return response()->json(['email' => $email]);


    }
    public function emailto(Request $request)
    {

        ini_set('SMTP', 'localhost');
        ini_set('smtp_port', 1025);

        // Email::create($request->all());

        // Mail::send(
        //     'email',
        //     array(
        //         'to' => 'maria11@gmail.com',
        //         'headers' => $request->get('headers'),
        //         'subject' => $request->get('email'),
        //         'body' => $request->get('body')
        //     ),
        //     function ($message) {
        //         $message->from('saquib.gt@gmail.com');
        //         $message->to('saquib.rizwan@cloudways.com', 'Admin')->subject('Cloudways Feedback');
        //     }
        // );
        // return back()->with('success', 'Thanks for contacting us!');




    }
}


