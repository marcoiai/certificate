@extends('index')

@section('content')
<di class="animated fadeIn">
<div class="col-lg-6">
    <form action="{{ route('label-new') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
    {{ csrf_field() }}

    <div class="card">
      <div class="card-header">
        <strong>Criar Etiqueta</strong>
      </div>

      <div class="card-body card-block">

          <div class="row form-group">
            <div class="col col-md-6"><label for="text-input" class=" form-control-label">Nome</label></div>
            <div class="col-12 col-md-11">
                <input type="text" id="label_name" name="label[name]" placeholder="E.x.: Embalagem Frango Congelado" class="form-control" value="{{ $label->name }}" />
                <small class="form-text help-block">This is a help text</small>
            </div>
          </div>
          <div class="row form-group">
            <div class="col col-md-6"><label for="text-input" class=" form-control-label">Descrição</label></div>
            <div class="col-12 col-md-11">
                <textarea name="label[description]" id="label_description" rows="9" placeholder="Content..." class="form-control">{{ $label->description }}</textarea>
                <small class="form-text help-block">This is a help text</small>
            </div>
          </div>
          <div class="row form-group">
            <div class="col col-md-6"><label for="text-input" class=" form-control-label">Data de Validade</label></div>
            <div class="col-12 col-md-11">
                <input type="text" id="label_date_valid" name="label[date_valid]" placeholder="99/99/9999" class="form-control" value="{{ $label->date_valid }}" />
                <small class="form-text help-block">This is a help text</small>
            </div>
          </div>
          <div class="row form-group">
            <div class="col col-md-6"><label for="text-input" class=" form-control-label">Data de Produção</label></div>
            <div class="col-12 col-md-11">
                <input type="text" id="label_date_production" name="label[date_production]" placeholder="99/99/9999" class="form-control" value="{{ $label->date_production }}" />
                <small class="form-text help-block">This is a help text</small>
            </div>
          </div>
          <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Mercadoria</label></div>
            <div class="col-12 col-md-9">
                <select id="label_product_id" name="label[product_id]" class="form-control">
                @foreach ($products as $c)
                    <option value="{{ $c->id }}" {{ $label->product_id == $c->id ? 'selected': null }}>{{ $c->name }}</option>
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
