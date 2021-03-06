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
          <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Nome</th>
                  <th scope="col">&nbsp;</th>
                </tr>
              </thead>
              <tbody>

               @foreach ($certificates as $certificate)
                <tr>
                  <td>{{ $certificate->id }}</td>
                  <td>
                      <a href="{{ route('certificate-edit', ['id' => $certificate->id]) }}">
                          <i class="fa fa-edit"></i>
                      </a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>

        </form>
      </div>
      <div class="card-footer">
      </div>
    </div>

    </form>
  </div>
</div>
@endsection
