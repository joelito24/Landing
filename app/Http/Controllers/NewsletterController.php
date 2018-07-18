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
use Input;



class NewsletterController extends Controller
{
    public function newsletter(){

        return View('front.whitepapers.whitepapers');

    }
    public function add(Newsletter $newsletterRepository, EmailServices $emailServices, Whitepapers $whitepapersRepository){
        $contactData = Input::all();
        $id = $contactData['idPdf'];
        $whitepaper = $whitepapersRepository->find($id);
        $pdf = $whitepaper->data_file;

        if(isset($contactData['newsletter']) && $contactData['newsletter'] == 1){
            if($newsletterRepository->checkEmail($contactData['email'])){
            }else{
                $newsletterRepository->add($contactData);
            }
        }
        $emailServices->sendWhitepaper($contactData['name'], $contactData['email'], $pdf);

        return 'sent';
    }
}