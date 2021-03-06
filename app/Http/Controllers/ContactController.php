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
        //Comprobar si es un robot
        if($contactData['lastname'] != ""){
            return 'bot';
        }
        if(!isset($contactData['consult'])){$contactData['consult'] = ["0"];}

        $contactData['consultas'] = json_encode($contactData['consult']);

        $emailService->contactEmail(
            $contactData['name'],
            $contactData['email'],
            $contactData['telephone'],
            $contactData['consulta'],
            $contactData['consultas'],
            $contactData['web']
        );
        $emailService->successContact(
            $contactData['name'],
            $contactData['email'],
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
        //Comprobar si es un robot
        if($contactData['lastname'] != ""){
            return 'bot';
        }
        $emailService->contactShortEmail(
            $contactData['name'],
            $contactData['email'],
            $contactData['consulta']
        );
        $emailService->successContact(
            $contactData['name'],
            $contactData['email'],
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

    function sendShortLandingEcommerce( EmailServices $emailService, Newsletter $newsletterRepository, ContactsHistory $contactsHistoryRepository )
    {

        $contactData = Input::all();
        //Comprobar si es un robot

        $emailService->contactShortEmailLanding(
            $contactData['name'],
            $contactData['web'],
            $contactData['email'],
            $contactData['telf']
        );
        $emailService->successContact(
            $contactData['name'],
            $contactData['email'],
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

    function sendShortLandingKitDigital( EmailServices $emailService, Newsletter $newsletterRepository, ContactsHistory $contactsHistoryRepository )
    {

        $contactData = Input::all();
        //Comprobar si es un robot

        $emailService->contactShortEmailLanding(
            $contactData['name'],
            $contactData['web'],
            $contactData['email'],
            $contactData['telf']
        );
        $emailService->successContact(
            $contactData['name'],
            $contactData['email'],
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
