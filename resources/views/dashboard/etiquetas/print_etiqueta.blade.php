@extends('layouts.adminlte_print')

@section('title', 'TSJ: Etiqquetas')

@section('content')


    <div class="card card-navy">
        <div class="card-header">
            <h3 class="card-title">
                BIENES TSJ
            </h3>
        </div>
        <div class="card-body">
            {!! QrCode::size(150)->generate($texto); !!}
        </div>
    </div>
    <div class="card card-navy">
        <div class="card-header">
            <h3 class="card-title">
                CONSULTA EN LINEA
            </h3>
        </div>
        <div class="card-body">
            {!! QrCode::size(150)->generate($url); !!}
        </div>
    </div>



@endsection

