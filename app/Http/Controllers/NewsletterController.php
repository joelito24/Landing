<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 10/04/18
 * Time: 12:37
 */

namespace App\Http\Controllers;
use App\Models\Newsletter;
use Input;



class NewsletterController extends Controller
{
    public function newsletter(){

        return View('front.whitepapers.whitepapers');

    }
    public function add(Newsletter $newsletterRepository){
        $contactData = Input::all();
        if($newsletterRepository->checkEmail($contactData['email'])){
            /*return View('front.whitepapers.whitepapers')
                ->with('send', 'exist');*/
            return 'exist';
        }else{
            $newsletterRepository->add($contactData);
            /*return View('front.whitepapers.whitepapers')
                ->with('send', 'sent');*/
            return 'sent';
        }
    }
}