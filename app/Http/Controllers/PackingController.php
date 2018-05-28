<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Packing;
use App\Client;

class PackingController extends Controller
{
    public function list(Request $request)
    {
        $packings = Packing::orderBy('name', 'asc')->get();

        return view('packing/list', ['packings' => $packings]);
    }

    public function create(Request $request)
    {
        $packing = new Packing;

        $clients = Client::orderBy('id')->get();

        return view('packing/new', ['packing' => $packing, 'clients' => $clients]);
    }

    public function new(Request $request)
    {
        $packing = new Packing;

        $data = $request->get('packing');

        $packing->name          = $data['name'];
        $packing->client_id     = $data['client_id'];
        $packing->description   = $data['description'];

        $packing->save();

        dd($packing);

        return redirect('');
      //return view('packing/new');
    }

    public function edit(Packing $packing)
    {
        $clients = Client::orderBy('id')->get();

        return view('packing/new', ['packing' => $packing, 'clients' => $clients]);
    }
}
