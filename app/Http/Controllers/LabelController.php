<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Label;
use App\Product;

class LabelController extends Controller
{
    public function list(Request $request)
    {
        $labels = Label::orderBy('name', 'asc')->get();

        return view('label/list', ['labels' => $labels]);
    }

    public function create(Request $request)
    {
        $label = new Label;

        $products = Product::orderBy('id')->get();

        return view('label/new', ['label' => $label, 'products' => $products]);
    }

    public function new(Request $request)
    {
        $label = new Label;

        $data = $request->get('label');

        $label->name                = $data['name'];
        $label->product_id          = $data['product_id'];
        $label->description         = $data['description'];
        $label->date_production     = $data['date_production'];
        $label->date_valid          = $data['date_valid'];

        $label->save();

        dd($label);

        return redirect('');
      //return view('label/new');
    }

    public function edit(Label $label)
    {
        $products = Product::orderBy('id')->get();

        return view('label/new', ['label' => $label, 'products' => $products]);
    }
}
