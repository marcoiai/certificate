<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contract;
use App\Client;

class ContractController extends Controller
{
    public function list(Request $request)
    {
        $contracts = Contract::orderBy('order', 'asc')->get();

        return view('contract/list', ['contracts' => $contracts]);
    }

    public function create(Request $request)
    {
        $contract = new Contract;

        $clients = Client::orderBy('id')->get();

        return view('contract/new', ['contract' => $contract, 'clients' => $clients]);
    }

    public function new(Request $request)
    {
        $contract = new Contract;

        $data = $request->get('contract');

        $contract->client_id      = $data['client_id'];
        $contract->order          = $data['order'];
        $contract->protocol       = $data['protocol'];

        $contract->save();

        return redirect('contract/list');
    }

    public function edit(Contract $contract)
    {
        $clients = Client::orderBy('id')->get();

        return view('contract/new', ['contract' => $contract, 'clients' => $clients]);
    }
}
