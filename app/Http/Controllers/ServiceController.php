<?php
namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use App\Models\Services;

class ServiceController extends Controller
{
    public function service(Services $serviceRepository, $slug){

    	$service = $serviceRepository->findBySlug($slug);
        return view('front.services.service', [
                'service' => $service,
            ]);
    }
}