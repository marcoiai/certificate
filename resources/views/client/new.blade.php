@extends('index')

@section('content')
<di class="animated fadeIn">
<div class="col-lg-6">
    <form action="{{ route('client-new') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
    {{ csrf_field() }}

    <div class="card">
      <div class="card-header">
        <strong>Criar Cliente</strong>
      </div>

      <div class="card-body card-block">

          <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nome</label></div>
            <div class="col-12 col-md-9">
                <input type="text" id="client_name" name="client[name]" placeholder="Text" class="form-control" value="{{ $client->name }}" />
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
