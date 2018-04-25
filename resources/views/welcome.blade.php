@extends('index')

@section('content')
<div class="col-sm-12 mb-4">
    <div class="card-group">
        <div class="card col-md-6 no-padding ">
            <div class="card-body">
                <div class="h1 text-muted text-right mb-4">
                    <i class="fa fa-certificate"></i>
                </div>

                <div class="h4 mb-0">
                    <span class="count">{{ count($certificates) }}</span>
                </div>

                <small class="text-muted text-uppercase font-weight-bold">Certificados</small>
                <div class="progress progress-xs mt-3 mb-0 bg-flat-color-1"></div>
            </div>
        </div>
        <div class="card col-md-6 no-padding ">
            <div class="card-body">
                <div class="h1 text-muted text-right mb-4">
                    <i class="fa fa-truck"></i>
                </div>
                <div class="h4 mb-0">
                    <span class="count">385</span>
                </div>
                <small class="text-muted text-uppercase font-weight-bold">dias para entrega</small>
                <div class="progress progress-xs mt-3 mb-0 bg-flat-color-2"></div>
            </div>
        </div>
        <div class="card col-md-6 no-padding ">
            <div class="card-body">
                <div class="h1 text-muted text-right mb-4">
                    <i class="fa fa-users"></i>
                </div>
                <div class="h4 mb-0">
                    <span class="count">{{ count($clients)}}</span>
                </div>
                <small class="text-muted text-uppercase font-weight-bold">Clientes</small>
                <div class="progress progress-xs mt-3 mb-0 bg-flat-color-3"></div>
            </div>
        </div>
        <div class="card col-md-6 no-padding ">
            <div class="card-body">
                <div class="h1 text-muted text-right mb-4">
                    <i class="fa fa-container-storage"></i>
                </div>
                <div class="h4 mb-0">
                    <span class="count">89</span>
                </div>
                <small class="text-muted text-uppercase font-weight-bold">Vistorias</small>
                <div class="progress progress-xs mt-3 mb-0 bg-flat-color-4"></div>
            </div>
        </div>
        <div class="card col-md-6 no-padding ">
            <div class="card-body">
                <div class="h1 text-muted text-right mb-4">
                    <i class="fa fa-clock-o"></i>
                </div>
                <div class="h4 mb-0">00:34:11</div>
                <small class="text-muted text-uppercase font-weight-bold">Tempo Médio</small>
                <div class="progress progress-xs mt-3 mb-0 bg-flat-color-5"></div>
            </div>
        </div>
    </div>
</div>
@endsection
