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

    public function contactEmail($name, $email, $telephone, $consulta, $consultas, $web)
    {
        $subject = "Nueva solicitud de Contacto";
        $to = "prueba@thatzad.com";
        $view = 'emails.contact';
        $from = $email;
        $sender = "info@thatzad.com";
        $data = ['data' => [
                'project_name' => "Thatzad",
                'title' => "Thatzad - Contacto",
                'name' => $name,
                'email' => $email,
                'telephone' => $telephone,
                'consulta' => $consulta,
                'consultas' => $consultas,
                'web' => $web]];
        $this->sendEmail($from, $to, $subject, $view, $data, $sender);
    }

    public function contactShortEmail($name, $email, $consulta)
    {
        $subject = "Nueva solicitud de Contacto";
        $to = "prueba@thatzad.com";
        $view = 'emails.contactShort';
        $from = $email;
        $sender = "info@thatzad.com";
        $data = ['data' => [
            'project_name' => "Thatzad",
            'title' => "Thatzad - Contacto",
            'name' => $name,
            'email' => $email,
            'consulta' => $consulta]];
        $this->sendEmail($from, $to, $subject, $view, $data, $sender);
    }

    public function sendWhitepaper($name, $email, $pdf){
        $subject = "Thatzpaper";
        $to = $email;
        $view = 'emails.sendwhitepaper';
        $from = "prueba@thatzad.com";
        $sender = "info@thatzad.com";
        $data = ['data' => [
            'project_name' => "Thatzad",
            'title' => "Thatzad - Whitepapers",
            'name' => $name,
            'pdf' => $pdf]];
        $this->sendEmail($from, $to, $subject, $view, $data, $sender);
    }

}
