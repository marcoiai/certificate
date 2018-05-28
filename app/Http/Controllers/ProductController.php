<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Client;

class ProductController extends Controller
{
    public function list(Request $request)
    {
        $products = Product::orderBy('name', 'asc')->get();

        return view('product/list', ['products' => $products]);
    }

    public function create(Request $request)
    {
        $product = new Product;

        $clients = Client::orderBy('id')->get();

        return view('product/new', ['product' => $product, 'clients' => $clients]);
    }

    public function new(Request $request)
    {
        $product = new Product;

        $data = $request->get('product');

        $product->name = $data['name'];

        $product->client_id = $data['client_id'];

        $product->save();

        return redirect('product/list');
      //return view('product/new');
    }

    public function edit(Product $product)
    {
        $clients = Client::orderBy('id')->get();

        return view('product/new', ['product' => $product, 'clients' => $clients]);
    }
}
