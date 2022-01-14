<?php

namespace App\Services;

use Illuminate\Support\Facades\Mail;

class EmailServices
{

    private function sendEmail( $from, $to, $subject, $view, $data, $emailFrom, $bcc = null)
    {
        Mail::send($view, $data, function ($message) use($from, $to, $subject, $emailFrom,$bcc)
        {
            //$message->from($emailFrom);
            $message->to($to);
            // if ($bcc){ $message->bcc($bcc); }
            $message->subject($subject);

        });
    }

    private function sendEmailWithPdf( $from, $to, $subject, $view, $data, $emailFrom, $pdf)
    {
        Mail::send($view, $data, function ($message) use ($from, $to, $subject, $emailFrom, $pdf)
        {
            $message->from($emailFrom);
            $message->to($to);
            $message->subject($subject);
            $message->attach('files/whitepapers/'.$pdf, array(
                    'as' => $pdf,
                    'mime' => 'application/pdf')
            );
        });
    }

    public function contactEmail($name, $email, $telephone, $consulta, $consultas, $web)
    {
        $subject = "Thatzad Agencia e-Marketing - Solicitud de contacto";
        $to = env('EMAIL_TO_THATZAD');
        $view = 'emails.contact';
        $from = $email;
        $sender = $email;
        $data = ['data' => [
                'project_name' => "Thatzad",
                'title' => "Thatzad Agencia e-Marketing",
                'name' => $name,
                'email' => $email,
                'telephone' => $telephone,
                'consulta' => $consulta,
                'consultas' => $consultas,
                'web' => $web]];
        $this->sendEmail($from, $to, $subject, $view, $data, $sender,$email);
    }
    public function successContact($name, $email){
        $subject = "Thatzad Agencia e-Marketing - Solicitud de contacto";
        $to = $email;
        $view = 'emails.contact';
        $from = env('EMAIL_TO_THATZAD');
        $sender = $email;
        $view = 'emails.contact_succes';
        $data = [
            'data' => [
                'project_name' => "Thatzad",
                'title' => "Thatzad Agencia e-Marketing",
                'name' =>  $name
            ]
        ];
        $this->sendEmail($from, $to, $subject, $view, $data, $sender);
    }
    public function contactShortEmail($name, $email, $consulta)
    {
        $subject = "Thatzad Agencia e-Marketing - Solicitud de contacto";
        $to = env('EMAIL_TO_THATZAD');
        $view = 'emails.contactShort';
        $from = $email;
        $sender = $email;
        $data = ['data' => [
            'project_name' => "Thatzad",
            'title' => "Thatzad Agencia e-Marketing",
            'name' => $name,
            'email' => $email,
            'consulta' => $consulta]];
        $this->sendEmail($from, $to, $subject, $view, $data, $sender,$email);
    }

    public function contactShortEmailLanding($name, $web, $email, $telf)
    {
        $subject = "Thatzad Agencia e-Marketing - Solicitud de contacto";
        $to = env('EMAIL_TO_THATZAD');
        $view = 'emails.contactShortLanding';
        $from = $email;
        $sender = $email;
        $data = ['data' => [
            'project_name' => "Thatzad",
            'title' => "Thatzad Agencia e-Marketing",
            'name' => $name,
            'email' => $email,
            'web' => $web,
            'telf' => $telf,

        ]];
        $this->sendEmail($from, $to, $subject, $view, $data, $sender,$email);
    }
    public function contactShortEmailPosts($name, $web, $email, $telf)
    {
        $subject = "Thatzad Blog - Solicitud de contacto";
        $to = env('EMAIL_TO_THATZAD');
        $view = 'emails.contactShortLanding';
        $from = $email;
        $sender = $email;
        $data = ['data' => [
            'project_name' => "Thatzad",
            'title' => "Thatzad Blog",
            'name' => $name,
            'email' => $email,
            'web' => $web,
            'telf' => $telf,

        ]];
        $this->sendEmail($from, $to, $subject, $view, $data, $sender,$email);
    }
    public function sendWhitepaper($name, $email, $pdf){
        $subject = "Thatzpaper";
        $to = $email;
        $view = 'emails.sendwhitepaper';
        $from = env('EMAIL_TO_THATZAD');
        $sender = "hola@thatzad.com";
        $data = ['data' => [
            'project_name' => "Thatzad",
            'title' => "Thatzpaper",
            'name' => $name,
            'pdf' => $pdf]];
        $this->sendEmailWithPdf($from, $to, $subject, $view, $data, $sender,$pdf);
    }

}
