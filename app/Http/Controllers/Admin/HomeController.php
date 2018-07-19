<?php

namespace App\Http\Controllers\Admin;

use App\Models\ContactsHistory;

class HomeController extends BaseController
{

    public function index(ContactsHistory $contactRepository)
    {
        $cant['services']     = count(\App\Models\Services::all());
        $cant['projects']     = count(\App\Models\Projects::all());
        $cant['whitepapers']     = count(\App\Models\Whitepapers::all());
        $cant['contacts'] = $contactRepository->getTodayContacts();
        return view('admin.home', ['cant' => $cant]);
//        return view('admin.home');
    }

}
