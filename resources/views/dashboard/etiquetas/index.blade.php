@extends('adminlte::page')

@section('plugins.Select2', true)

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

        function clickInputImagen() {
            /*let input = document.getElementById('customFileLangCategoria');
            input.click();*/
            $('#customFileLangImagen').click();
        }

        //Right-Sidebar
        function verCategorias() {
            Livewire.emit('limpiarCategorias');
        }

        function verProcedencias() {
            Livewire.emit('limpiarProcedencias');
        }

        //Select 2
        function select_2(id, data, event) {
            let html = '<div class="input-group-prepend">' +
                '<span class="input-group-text text-bold">' +
                '<i class="far fa-bookmark"></i>' +
                '</span>' +
                '</div> ' +
                '<select id="' + id + '"></select>';
            $('#div_' + id).html(html);

            $('#' + id).select2({
                //dropdownParent: $('#modal-servicios'),
                theme: 'bootstrap4',
                data: data,
                placeholder: 'Seleccione',
                /*allowClear: true*/
            });
            $('#' + id).val(null).trigger('change');
            $('#' + id).on('change', function () {
                var val = $(this).val();
                Livewire.emit(event, val);
            });
        }

        //Select Categorias
        Livewire.on('listarSelectCategorias', data => {
            select_2('select_categorias', data, 'getCategoria');
        });

        Livewire.on('setSelectCategorias', data => {
            $('#select_categorias').val(data).trigger('change');
        });

        Livewire.on('selectCategorias', () => {
            Livewire.emit('initSelectCategorias');
        });

        //Select Procedencias
        Livewire.on('listarSelectProcedencias', data => {
            select_2('select_procedencias', data, 'getProcedencia');
        });

        Livewire.on('setSelectProcedencias', data => {
            $('#select_procedencias').val(data).trigger('change');
        });

        Livewire.on('selectProcedencias', () => {
            Livewire.emit('initSelectProcedencias');
        });


        function search() {
            let input = $("#navbarSearch");
            let keyword = input.val();
            if (keyword.length > 0) {
                input.blur();
                //alert('Falta vincular con el componente Livewire');
                Livewire.emit('buscarArticulo', keyword);
            }
            return false;
        }

        console.log('Hi!');
    </script>
@endsection
