<?php

namespace App\Http\Controllers;

use Input;
use App\Services\EmailServices;
use App\Models\Newsletter;
use App\Models\ContactsHistory;
use Illuminate\Http\Request;

class ContactPostController extends Controller
{
    function send( Request $request, EmailServices $emailService, Newsletter $newsletterRepository, ContactsHistory $contactsHistoryRepository )
    {
       
        $contactData = $request->all();

        $emailService->contactShortEmailPosts(
            $contactData['name'],
            $contactData['web'],
            $contactData['email'],
            $contactData['telefono']
        );

        $contactsHistoryRepository->add($contactData);
       
       if($contactData['newsletter'] == "true"){
            
            $result = $newsletterRepository->checkEmail($contactData['email']);
            if(!isset($result)){
                $newsletterRepository->add($contactData);
            }
        }
        return 'sent';
    }

}
