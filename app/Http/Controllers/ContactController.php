<?php

namespace App\Http\Controllers;

use Input;
use App\Services\EmailServices;
use App\Models\Newsletter;
use App\Models\ContactsHistory;

class ContactController extends Controller
{

    public function contact()
    {
        $contactData['name'] = "";
        $contactData['email'] = "";
        $contactData['telephone'] = "";
        $contactData['message'] = "";
        return View('front.contact.contact')
            ->with('contactData', $contactData);
    }

    function send( EmailServices $emailService, Newsletter $newsletterRepository, ContactsHistory $contactsHistoryRepository )
    {
        $contactData = Input::all();

        $contactData['consultas'] = json_encode($contactData['consult']);

        $emailService->contactEmail(
            $contactData['name'],
            $contactData['email'],
            $contactData['telephone'],
            $contactData['consulta'],
            $contactData['consultas'],
            $contactData['web']
        );

        $contactsHistoryRepository->add($contactData);

        if(isset($contactData['newsletter'])){
                $result = $newsletterRepository->checkEmail($contactData['email']);
                //dd($result);
                if(!isset($result)){
                    $newsletterRepository->add($contactData);
                }
        }



        /*return View('front.contact.contact')
            ->with('contactData', $contactData)
            ->with('send', true);*/
        return 'sent';
    }

    function sendShort( EmailServices $emailService, Newsletter $newsletterRepository, ContactsHistory $contactsHistoryRepository )
    {
        $contactData = Input::all();

        $emailService->contactShortEmail(
            $contactData['name'],
            $contactData['email'],
            $contactData['consulta']
        );

        $contactsHistoryRepository->add($contactData);

        if(isset($contactData['newsletter'])){
            $result = $newsletterRepository->checkEmail($contactData['email']);
            //dd($result);
            if(!isset($result)){
                $newsletterRepository->add($contactData);
            }
        }
        return 'sent';
    }

}
