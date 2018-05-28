@extends('index')

@section('content')
<di class="animated fadeIn">
<div class="col-lg-6">
    <form action="{{ route('packing-new') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
    {{ csrf_field() }}

    <div class="card">
      <div class="card-header">
        <strong>Criar Embalagem</strong>
      </div>

      <div class="card-body card-block">

          <div class="row form-group">
            <div class="col col-md-6"><label for="text-input" class=" form-control-label">Nome</label></div>
            <div class="col-12 col-md-11">
                <input type="text" id="packing_name" name="packing[name]" placeholder="E.x.: Embalagem Frango Congelado" class="form-control" value="{{ $packing->name }}" />
                <small class="form-text help-block">This is a help text</small>
            </div>
          </div>
          <div class="row form-group">
            <div class="col col-md-6"><label for="text-input" class=" form-control-label">Descrição</label></div>
            <div class="col-12 col-md-11">
                <input type="text" id="product_name" name="packing[description]" placeholder="E.x.: Embalagem de plástico, etc." class="form-control" value="{{ $packing->description }}" />
                <small class="form-text help-block">This is a help text</small>
            </div>
          </div>
          <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Cliente</label></div>
            <div class="col-12 col-md-9">
                <select id="packing_client_id" name="packing[client_id]" class="form-control">
                @foreach ($clients as $c)
                    <option value="{{ $c->id }}" {{ $packing->client_id == $c->id ? 'selected': null }}>{{ $c->name }}</option>
                @endforeach
                 </select>
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
