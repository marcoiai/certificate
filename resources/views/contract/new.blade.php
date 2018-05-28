@extends('index')

@section('content')
<di class="animated fadeIn">
<div class="col-lg-6">
    <form action="{{ route('contract-new') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
    {{ csrf_field() }}

    <div class="card">
      <div class="card-header">
        <strong>Criar Contrato</strong>
      </div>

      <div class="card-body card-block">

          <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Cliente</label></div>
            <div class="col-12 col-md-9">
                <select id="certificate_client_id" name="contract[client_id]" class="form-control">
                @foreach ($clients as $c)
                    <option value="{{ $c->id }}" {{ $contract->client_id == $c->id ? 'selected': null }}>{{ $c->name }}</option>
                @endforeach
                 </select>
            </div>
          </div>
          <div class="row form-group">
            <div class="col col-md-6"><label for="text-input" class=" form-control-label">Ordem</label></div>
            <div class="col-12 col-md-11">
                <input type="text" id="contract_name" name="contract[order]" placeholder="E.x.: BR-0000-0000" class="form-control" value="{{ $contract->order }}" />
                <small class="form-text help-block">This is a help text</small>
            </div>
          </div>
          <div class="row form-group">
            <div class="col col-md-6"><label for="text-input" class=" form-control-label">Protocolo</label></div>
            <div class="col-12 col-md-11">
                <input type="text" id="product_name" name="contract[protocol]" placeholder="E.x.: 0000-00-00-0000" class="form-control" value="{{ $contract->protocol }}" />
                <small class="form-text help-block">This is a help text</small>
            </div>
          </div>

        </form>
      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-primary btn-sm">
          <i class="fa fa-dot-circle-o"></i> Salvar
        </button>
        <button type="reset" class="btn btn-danger btn-sm">
          <i class="fa fa-ban"></i> Voltar
        </button>
      </div>
    </div>

    </form>
  </div>
</div>
@endsection
