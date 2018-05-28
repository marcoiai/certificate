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
          <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Nome</th>
                  <th scope="col">&nbsp;</th>
                </tr>
              </thead>
              <tbody>

               @foreach ($packings as $packing)
                <tr>
                  <td>{{ $packing->name }}</td>
                  <td>
                      <a href="{{ route('packing-edit', ['id' => $packing->id]) }}">
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
