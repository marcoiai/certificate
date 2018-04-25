<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dompdf\Dompdf;
use App\Certificate;

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
        //$locks = $certificate->with('certificates_locks');

      $html = <<<HTML
      <html>
    <head>
        <style>
        /**
        * Set the margins of the PDF to 0
        * so the background image will cover the entire page.
        **/
        @page {
            margin: 0cm 0cm;
        }

        /**
        * Define the real margins of the content of your PDF
        * Here you will fix the margins of the header and footer
        * Of your background image.
        **/
        body {
            margin-top:    3.5cm;
            margin-bottom: 1cm;
            margin-left:   1cm;
            margin-right:  1cm;
        }

        /**
        * Define the width, height, margins and position of the watermark.
        **/
        #watermark {
            position: fixed;
            bottom:   0px;
            left:     0px;
            /** The width and height may change
                according to the dimensions of your letterhead
            **/
            width:    21cm;
            height:   29.7cm;

            /** Your watermark should be behind every content**/
            z-index:  -1000;
        }

        .content {
          margin-left: 2cm;
        }
        </style>
    </head>
    <body>
        <div id="watermark">
            <img src="background.png" height="100%" width="100%" />
        </div>

        <main class="content">
            <small>Conformity is Certificated ISO 9001:2008 by RINA<br />Accreditations INMETRO, ANAB, IQNET, IAF, ACCREDIA and CISQ</small>

            <h4>CERTIFICADO DE CONFORMIDAD<br />INSPECCION PRE-EMBARQUE</h4>

            <p>
              Certificamos que, a solicitud de<br />
              <strong>{$certificate->client_id}</strong>
            </p>

            <p>
              y actuando<br />
              <strong></strong>
            </p>

            <p>
              como agente de<br />
              <strong>{$certificate->agent_id}</strong>
            </p>

        </main>
    </body>
</html>
HTML;

      // instantiate and use the dompdf class
      $dompdf = new Dompdf();
      $dompdf->loadHtml($html);

      // (Optional) Setup the paper size and orientation
      $dompdf->setPaper('A4', 'portrait');

      // Render the HTML as PDF
      $dompdf->render();

      // Output the generated PDF to Browser
      $dompdf->stream('bla', array("Attachment"=>0));

      die('generate PDF');
    }
}
