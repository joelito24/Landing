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


        $emailService->contactEmail(
            $contactData['name'],
            $contactData['email'],
            $contactData['telephone'],
            $contactData['message']
        );

        $contactsHistoryRepository->add($contactData);

        if(isset($contactData['newsletter'])){
                $result = $newsletterRepository->validateMail($contactData['email']);
                if($result->isEmpty()){
                    $data = [
                        'email' => $contactData['email'],
                        'name' => $contactData['name'],
                        'surname' => "",
                        'telephone' => $contactData['telephone'],
                        'city' => "",
                        'active' => 1
                    ];
                    $newsletterRepository->add($data);
                }
        }



        return View('front.contact.contact')
            ->with('contactData', $contactData)
            ->with('send', true);
    }

}
