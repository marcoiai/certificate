@extends('index')

@section('content')
<di class="animated fadeIn">
<div class="col-lg-6">
    <form action="{{ route('certificate_temperature-new') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
    {{ csrf_field() }}

    <div class="card">
      <div class="card-header">
        <strong>Criar Temperatura</strong>
      </div>

      <div class="card-body card-block">

          <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Temperatura</label></div>
            <div class="col-12 col-md-9">
                <input type="text" id="lock_name" name="certificate_temperature[temperature]" placeholder="-18 C" class="form-control" value="{{ $certificate_temperature->temperature }}" />
                <small class="form-text help-block">Digite o número e a unidade de medida(C, F)</small>
            </div>
          </div>

          <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Legenda</label></div>
            <div class="col-12 col-md-9">
                <input type="text" id="certificate_temperature_caption" name="certificate_temperature[caption]" placeholder="Text" class="form-control" value="{{ $certificate_temperature->caption }}" />
                <small class="form-text help-block">This is a help text</small>
            </div>
          </div>

          <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Imagem</label></div>
            <div class="col-12 col-md-9">
                <input type="file" id="certificate_temperature_image" name="image" class="form-control" />
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
