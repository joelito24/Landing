<?php

namespace App\Http\Controllers\Admin;

use App\Core\Excel\ExcelTransformator;
use App\Models\ContactsHistory;
use App;
use Session;

class ContactsHistoryController extends BaseController
{
    protected $resourceName = 'contacts';
    protected $repositoryName = ContactsHistory::class;

    public function index()
    {
        App::setLocale('es');
        $fluxesHead = [
            'id' => 'ID',
            'email' => 'Email',
            'name' => 'Nombre',
            'company' => 'Empresa',
            'telephone' => 'Telefono',
            'created_at' => 'Fecha de alta',
        ];

        return view('admin.datatable', [
            'data' => ContactsHistory::all(),
            'pageTitle' => 'Listado de Contactos',
            'header' => $fluxesHead
        ]);
    }



    public function excel( ContactsHistory $contacts, ExcelTransformator $excelTransformator )
    {
        App::setLocale('es');
        $dataContacts = $contacts->findAllActive();

        $data = [];

        foreach ($dataContacts as $dataContact) {
            $data[] = [
                'Id' => $dataContact->id,
                'Email' => $dataContact->email,
                'Mensaje' => $dataContact->message,
            ];
        }
        $excelTransformator->transform($data);

        return back();
    }
}
