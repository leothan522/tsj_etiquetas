@extends('adminlte::page')

@section('title', 'TSJ | Etiquetas')

@section('content_header')
    <h1><i class="fas fa-tags"></i> Etiquetas</h1>
@endsection

@section('content')
    @livewire('dashboard.etiquetas-component')
    @livewire('dashboard.categorias-component')
    @livewire('dashboard.procedencias-component')
@endsection

@section('right-sidebar')
    @include('dashboard.etiquetas.right-sidebar')
@endsection

@section('footer')
    @include('dashboard.footer')
@endsection

@section('css')
    {{--<link rel="stylesheet" href="/css/admin_custom.css">--}}
@stop

@section('js')
    <script src="{{ asset("js/app.js") }}"></script>
    <script>

        function search(){
            let input = $("#navbarSearch");
            let keyword  = input.val();
            if (keyword.length > 0){
                input.blur();
                alert('Falta vincular con el componente Livewire');
                //Livewire.emit('increment', keyword);
            }
            return false;
        }

        function verCategorias() {
            Livewire.emit('limpiarCategorias');
        }

        function verProcedencias() {
            Livewire.emit('limpiarProcedencias');
        }

        console.log('Hi!');
    </script>
@endsection
