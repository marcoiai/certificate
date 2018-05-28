<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dompdf\Dompdf;
use App\Certificate;
use App\Client;
use App\Product;
use App\Contract;
use Dompdf\Options;

class PDFController extends Controller
{
    public function form(Request $request)
    {
      return view('form');
    }

    public function test()
    {
      return view('index');
    }

    public function pdf(Certificate $certificate)
    {
        $agent       = Client::find($certificate->agent_id);
        $client      = Client::find($certificate->client_id);
        $consignee   = Client::find($certificate->consignee_id);
        $contract    = Contract::find($certificate->contract_id);
        $product     = Product::find($certificate->product_id);

        $html = view()->make('pdf', [
                                    'certificate'   => $certificate,
                                    'agent'         => $agent,
                                    'client'        => $client,
                                    'consignee'     => $consignee,
                                    'contract'      => $contract,
                                    'product'       => $product
                                ])->render();

        //teste de computador, eu digito muito bem hahahhhaha
        //teste de conmputador dois, eu digito muito bem e sem erros.
        //atheduthoead 

        $options = new Options();
        $options->set('defaultFont', 'Arial');
        // instantiate and use the dompdf class
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html, 'UTF-8');

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream('bla', array("Attachment"=>0));
    }
}
