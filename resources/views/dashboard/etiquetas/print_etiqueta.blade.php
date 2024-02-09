@extends('layouts.adminlte_print')

@section('title', 'TSJ: Etiqquetas')

@section('content')

    <div class="row m-3">
        <div class="col-12 text-bold">
            Bien Nacional del T.S.J <br>
            TSJ-XXX-JJJJ-LLLL-NNNN
        </div>
        <div class="row mt-3">
            <div class="col-6 text-center">
                Consulta Local
                <hr>
                {!! QrCode::size(150)->generate($texto); !!}
            </div>
            <div class="col-6 text-center">
                Consulta en Linea
                <hr>
                {!! QrCode::size(150)->generate($url); !!}
            </div>
        </div>
    </div>



@endsection

