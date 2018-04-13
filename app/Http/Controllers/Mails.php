<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Mails extends Controller
{
    public function Send(Request $request)
    {
//        $to      = 'house@gmail.com';
//        $subject = 'С сайта';
//        $message = "";
//        $headers = 'From: webmaster@example.com' . "\r\n" .
//            'X-Mailer: PHP/' . phpversion();
//
//        mail($to, $subject, $message, $headers);

        $name = $request->input('name');
        $mail = $request->input('email');
        $phone = $request->input('phone');
        $body = $request->input('body');
        if ($phone == '' || $name == '')
        {
            abort(400);
        }
        $text = "Имя: $name; Телефон: $phone; Почта: $mail; Сообщение: $body";
        Mail::raw($text, function($message)
        {
            $message->from('no-reply@dktaganrog.ru', 'Дом Кровли');

            $message->to('nikiton2606@mail.ru');
        });

   }
}
