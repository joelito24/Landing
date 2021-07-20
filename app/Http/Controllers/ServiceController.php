<?php
namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use App\Models\Services;

class ServiceController extends Controller
{
    public function service(Services $serviceRepository, $slug){

    	$service = $serviceRepository->findBySlug($slug);
    	if(!$service){
            return \Response::view('errors.404',array(),500);
        }
        return view('front.services.service', [
                'service' => $service,
            ]);
    }
}