<?php

namespace App\Services;

use Illuminate\Support\Facades\Mail;

class EmailServices
{

    private function sendEmail( $from, $to, $subject, $view, $data, $emailFrom)
    {
        Mail::send($view, $data, function ($message) use($from, $to, $subject, $emailFrom)
        {
            $message->from($emailFrom);
            $message->to($to);
            $message->subject($subject);
        });
    }

    public function contactEmail($name, $email, $telephone, $message)
    {
        $subject = env('EMAIL_PROJECT_NAME') . " - Contacto";
        $to = env('EMAIL_TO');
        $view = 'emails.contact';
        $from = $email;
        $data = ['data' => [
                'project_name' => env('EMAIL_PROJECT_NAME'),
                'title' => env('EMAIL_PROJECT_NAME') . " - Contacto",
                'name' => $name,
                'email' => $email,
                'telephone' => $telephone,
                'message' => $message]];
        $this->sendEmail($from, $to, $subject, $view, $data, env('EMAIL_FROM'));
    }


}
