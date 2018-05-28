<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Certificate;
use App\Client;
use App\Contract;
use App\Product;

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

        $contracts = Contract::orderBy('id')->get();

        $products = Product::orderBy('id')->get();

        return view('certificate/new', [
            'certificate' => $certificate,
            'clients'     => $clients,
            'contracts'   => $contracts,
            'products'    => $products
        ]);
    }

    public function new(Request $request)
    {
        $certificate = new Certificate;

        $data = $request->get('certificate');

        $certificate->client_id             = $data['client_id'];
        $certificate->agent_id              = $data['agent_id'];
        $certificate->consignee_id          = $data['consignee_id'];
        $certificate->contract_id           = $data['contract_id'];
        $certificate->product_id            = $data['product_id'];
        $certificate->declared_quantity     = $data['declared_quantity'];
        $certificate->container             = $data['container'];
        $certificate->booking               = $data['booking'];
        $certificate->date_of_inspection    = $data['date_of_inspection'];

        $certificate->save();

        return redirect('certificate/list');
    }

    public function edit(Certificate $certificate)
    {
        $clients = Client::orderBy('id')->get();

        $contracts = Contract::orderBy('id')->get();

        $products = Product::orderBy('id')->get();

        return view('certificate/new', [
            'certificate' => $certificate,
            'clients'     => $clients,
            'contracts'   => $contracts,
            'products'    => $products
        ]);
    }
}
