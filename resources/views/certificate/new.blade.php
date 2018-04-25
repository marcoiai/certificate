@extends('index')

@section('content')
<di class="animated fadeIn">
<div class="col-lg-6">
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
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Agente</label></div>
            <div class="col-12 col-md-9">
                <select id="certificate_agent_id" name="certificate[agent_id]" class="form-control">
                @foreach ($clients as $c)
                    <option value="{{ $c->id }}" {{ $c->id == $certificate->agent_id ? 'selected' : null }}>{{ $c->name }}</option>
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
