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

  div.page_break + div.page_break{
        page-break-before: always;
    }

    .forced-break {
        page-break-after: always;
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
      <h4>#{{ $certificate->id }}</h4>
      <table style="font-weight: bold;">
          <tr>
              <td>Ordem:</td><td>{{ $contract->order }}</td>
          </tr>
          <tr>
              <td>Contract:</td><td>{{ $contract->protocol }}</td>
          </tr>
      </table>

      <p>
        Certificamos que, a solicitud de<br />
        <strong>{{ $client->name }}</strong>
      </p>

      <p>
        y actuando<br />
        <strong></strong>
      </p>

      <p>
        como agente de<br />
        <strong>{{ $agent->name }}</strong>
      </p>

      <p>
      dentro de sus competencias, se procedió a realizar las debidas inspecciones para Certificación de Conformidad en cargamentos de contenedores con <strong>{{ $product->name }}</strong>, destinado a exportación para
      </p>

      <p>DESTINO AQUI</p>

      <p>
          en acuerdo con los requisitos técnicos establecidos por el importador, bajo las exigencias de
      </p>

      <p>AT COMERCIAL, LA HABANA, CUBA</p>

      <p>con la seguiente entrega:</p>

      <p>
          <table>
              <tr>
                  <td><strong>CONSIGNEE:</strong></td><td> {{ strtoupper($consignee->name) }}</td>
             </tr>
             <tr>
                 <td><strong>MERCANCÍA:</strong></td><td> {{ strtoupper($product->name) }}</td>
             </tr>
             <tr>
                 <td><strong>RESERVA DE BUQUEO:</strong></td><td> {{ strtoupper($certificate->booking) }}</td>
             </tr>
             <tr>
                 <td><strong>CONTENEDOR:</strong></td><td> {{ strtoupper($certificate->container) }}</td>
             </tr>
             <tr>
                 <td><strong>CANTIDAD DECLARADA:</strong></td><td> {{ $certificate->declared_quantity }}</td>
            </tr>
            <tr>
                <td><strong>FECHA DE INSPECCION:</strong></td><td> {{ $certificate->date_of_inspection }}</td>
            </tr>
          </table>
      </p>

      <div class="forced-break"></div>
      <p style="margin-top: 65%;">
      Certificado emitido por CONFORMITY CERTIFICAÇÕES LTDA. actuando como agente de S.I.S. CUBACONTROL S.A.<br />
      Itajaí, Santa Catarina - Brasil, en 05 de Abril de 2018<br />
      Declaro para los debidos fines, que las informaciones declaradas en esto certificado son verdaderas y fueran verificadas seguiendo normas y patrones internacionales de inspeccion y auditoria.<br />
      </p>

      <p>dentro de sus competencias, se procedió a realizar las debidas inspecciones para Certificación de Conformidad en cargamentos de contenedores con INSERIR MERCADORIA AQUI, destinado a exportación para </p>

      <p>Se procedió según las directrices para inspección y certificación pre-embarque de productos destinados a NOME DO DESTINO AQUI, a realizar los siguientes trabajos:</p>

      <p>TEMPRERATURA DE CONSERVACIÓN</p>
      
  </main>
</body>
</html>
