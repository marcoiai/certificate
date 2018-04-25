<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Certificate;
use App\Client;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function home()
    {
        $certificates = Certificate::orderBy('id')->get();
        $clients      = Client::orderBy('id')->get();

        return view('welcome', [
                    'certificates' => $certificates,
                    'clients'      => $clients
                ]
        );
    }
}
