<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ClientController extends Controller
{
    public function list(Request $request)
    {
        $clients = Client::orderBy('name', 'asc')->get();

        return view('client/list', ['clients' => $clients]);
    }

    public function create(Request $request)
    {
        $client = new Client;

        return view('client/new', ['client' => $client]);
    }

    public function new(Request $request)
    {
        $client = new Client;

        $data = $request->get('client');

        $client->name = $data['name'];

        $client->save();

        dd($client);

        return redirect('');
      //return view('client/new');
    }

    public function edit(Client $client)
    {
        return view('client/new', ['client' => $client]);
    }
}
