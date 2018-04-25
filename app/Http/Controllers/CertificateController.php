<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Certificate;
use App\Client;

class CertificateController extends Controller
{
    public function list(Request $request)
    {
        $certificates = Certificate::orderBy('id', 'asc')->get();

        return view('certificate/list', ['certificates' => $certificates]);
    }

    public function create(Request $request)
    {
        $certificate = new Certificate;

        $clients = Client::orderBy('id')->get();

        return view('certificate/new', ['certificate' => $certificate, 'clients' => $clients]);
    }

    public function new(Request $request)
    {
        $certificate = new Certificate;

        $data = $request->get('certificate');

        $certificate->client_id = $data['client_id'];
        $certificate->agent_id  = $data['agent_id'];

        $certificate->save();

        dd($certificate);

        return redirect('');
      //return view('certificate/new');
    }

    public function edit(Certificate $certificate)
    {
        $clients = Client::orderBy('id')->get();

        return view('certificate/new', ['certificate' => $certificate, 'clients' => $clients]);
    }
}
