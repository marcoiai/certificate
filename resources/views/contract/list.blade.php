@extends('index')

@section('content')
<di class="animated fadeIn">
<div class="col-lg-6">
    <form action="{{ route('contract-new') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
    {{ csrf_field() }}

    <div class="card">
      <div class="card-header">
        <strong>Contratos</strong>
      </div>

      <div class="card-body card-block">
          <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Ordem</th>
                  <th scope="col">Protocolo</th>
                  <th scope="col">&nbsp;</th>
                </tr>
              </thead>
              <tbody>

               @foreach ($contracts as $contract)
                <tr>
                  <td>{{ $contract->order }}</td>
                  <td>{{ $contract->protocol }}</td>
                  <td>
                      <a href="{{ route('contract-edit', ['id' => $contract->id]) }}">
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
