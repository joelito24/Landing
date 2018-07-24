<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 10/04/18
 * Time: 12:37
 */

namespace App\Http\Controllers;
use App\Models\Newsletter;
use App\Models\Whitepapers;
use App\Services\EmailServices;
use Input, Session;



class NewsletterController extends Controller
{
    public function newsletter(){

        return View('front.whitepapers.whitepapers');

    }
    public function add(Newsletter $newsletterRepository, EmailServices $emailServices, Whitepapers $whitepapersRepository){


        if (Session::has('whitepapers'))
        {
            $idSubscriber = Input::get('idSubscriber');
            $idWhitepaper = Input::get('idWhitepaper');
            $userSubsribed = $newsletterRepository->find($idSubscriber);
            $whitepaper = $whitepapersRepository->find($idWhitepaper);
            $pdf = $whitepaper->data_file;
//            dd($unities);
            $emailServices->sendWhitepaper($userSubsribed->name, $userSubsribed->email, $pdf);
            return 'sentDirect';
        }else{
            $contactData = Input::all();
            $id = $contactData['idPdf'];
            $whitepaper = $whitepapersRepository->find($id);
            $pdf = $whitepaper->data_file;
            if(isset($contactData['newsletter']) && $contactData['newsletter'] == 1){
                if($newsletterRepository->checkEmail($contactData['email'])){
                    $newSubscriber = $newsletterRepository->checkEmail($contactData['email']);
                }else{
                    $newSubscriber = $newsletterRepository->add($contactData);
                }
                $emailServices->sendWhitepaper($contactData['name'], $contactData['email'], $pdf);
                Session::put('whitepapers', $newSubscriber->id);
                return 'sentWithSubscribe';
            }else{
                $emailServices->sendWhitepaper($contactData['name'], $contactData['email'], $pdf);
                return 'sent';
            }
        }


    }
}