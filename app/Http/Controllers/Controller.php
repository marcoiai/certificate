<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Certificate;
use App\Client;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function home()
    {
        $certificates = Certificate::orderBy('id')->get();
        $clients      = Client::orderBy('id')->get();

        $vistorias = DB::select('select SUM(declared_quantity) AS vistorias from certificates', [])[0];

        //$this->teste = Certificate::lista($teste);

        return view('welcome', [
                    'certificates' => $certificates,
                    'clients'      => $clients,
                    'vistorias'    => $vistorias
                ]
        );
    }
}
