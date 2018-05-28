@extends('index')

@section('content')
<di class="animated fadeIn">
<div class="col-lg-8">
    <form action="{{ route('certificate-new') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
    {{ csrf_field() }}

    <div class="card">
      <div class="card-header">
        <strong>Criar Certificado</strong>
      </div>

      <div class="card-body card-block">

          <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Cliente</label></div>
            <div class="col-12 col-md-9">
                <select id="certificate_client_id" name="certificate[client_id]" class="form-control">
                @foreach ($clients as $c)
                    <option value="{{ $c->id }}" {{ $certificate->client_id == $c->id ? 'selected': null }}>{{ $c->name }}</option>
                @endforeach
                 </select>
            </div>
          </div>

          <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Contrato</label></div>
            <div class="col-12 col-md-9">
                <select id="certificate_client_id" name="certificate[contract_id]" class="form-control">
                @foreach ($contracts as $c)
                    <option value="{{ $c->id }}" {{ $certificate->contract_id == $c->id ? 'selected': null }}>{{ $c->order }}</option>
                @endforeach
                 </select>
            </div>
          </div>

          <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Agente</label></div>
            <div class="col-12 col-md-9">
                <select id="certificate_agent_id" name="certificate[agent_id]" class="form-control">
                @foreach ($clients as $c)
                    <option value="{{ $c->id }}" {{ $c->id == $certificate->agent_id ? 'selected' : null }}>{{ $c->name }}</option>
                @endforeach
                 </select>
            </div>
          </div>

          <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Consignee</label></div>
            <div class="col-12 col-md-9">
                <select id="certificate_consignee_id" name="certificate[consignee_id]" class="form-control">
                @foreach ($clients as $c)
                    <option value="{{ $c->id }}" {{ $c->id == $certificate->consignee_id ? 'selected' : null }}>{{ $c->name }}</option>
                @endforeach
                 </select>
            </div>
          </div>

          <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Mercadoria</label></div>
            <div class="col-12 col-md-9">
                <select id="certificate_product_id" name="certificate[product_id]" class="form-control">
                @foreach ($products as $c)
                    <option value="{{ $c->id }}" {{ $c->id == $certificate->product_id ? 'selected' : null }}>{{ $c->name }}</option>
                @endforeach
                 </select>
            </div>
          </div>

          <div class="row form-group">
            <div class="col col-md-2 col-sm-3"><label for="text-input" class=" form-control-label">Quantidade</label></div>
            <div class="col-3 col-md-3 col-sm-9">
                <input type="text" id="certificate_declared_quantity" name="certificate[declared_quantity]" placeholder="22" class="form-control" value="{{ $certificate->declared_quantity }}" />
                <small class="form-text help-block">This is a help text</small>
            </div>

            <div class="col col-md-2 col-sm-3"><label for="text-input" class=" form-control-label">Container</label></div>
            <div class="col-4 col-md-4 col-sm-9">
                <input type="text" id="certificate_container" name="certificate[container]" placeholder="E.x.: TEXU-8877" class="form-control" value="{{ $certificate->container }}" />
                <small class="form-text help-block">This is a help text</small>
            </div>
          </div>

          <div class="row form-group">
            <div class="col col-md-6"><label for="text-input" class=" form-control-label">Booking</label></div>
            <div class="col-12 col-md-11">
                <input type="text" id="certificate_booking" name="certificate[booking]" placeholder="E.x.: XXX 0000000" class="form-control" value="{{ $certificate->booking }}" />
                <small class="form-text help-block">This is a help text</small>
            </div>
          </div>

          <div class="row form-group">
            <div class="col col-md-6"><label for="text-input" class=" form-control-label">Data da Inspeção</label></div>
            <div class="col-12 col-md-11">
                <input type="text" id="certificate_date_of_inspection" name="certificate[date_of_inspection]" placeholder="E.x.: 99/99/9999" class="form-control" value="{{ $certificate->date_of_inspection }}" />
                <small class="form-text help-block">This is a help text</small>
            </div>
          </div>

        </form>
      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-primary btn-sm">
          <i class="fa fa-dot-circle-o"></i> Salvar
        </button>
        <a href="{{ route('pdf', ['certificate' => $certificate]) }}" class="btn btn-info btn-sm">
          <i class="fa fa-ban"></i> Gerar
        </a>
        <button type="reset" class="btn btn-danger btn-sm">
          <i class="fa fa-ban"></i> Voltar
        </button>
      </div>
    </div>

    </form>
  </div>
  <div class="col-lg-3" class="text-center">
      <a href="#file-text-o" class="text-center"><i class="fa fa-file-text-o" style="font-size: 72px;"></i> <br />Gerar PDF</a>
  </div>
</div>
@endsection
