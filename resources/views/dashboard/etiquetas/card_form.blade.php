<div class="card card-navy" style="height: inherit; width: inherit; transition: all 0.15s ease 0s;"
     xmlns:wire="http://www.w3.org/1999/xhtml">

    <div class="card-header">
        <h3 class="card-title">
            @if($nuevo)
                Registrar
            @endif
            @if($editar)
                Editar
            @endif
            Bien
        </h3>
        <div class="card-tools">
            {{--<button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
            </button>--}}
            @if(!$nuevo)
                <button class="btn btn-tool" wire:click="create">
                    <i class="fas fa-file"></i> Nuevo</button>
            @endif
            @if($editar)
                <button class="btn btn-tool" wire:click="destroy({{ $articulos_id }})"
                        @if(!comprobarPermisos('articulos.destroy')) disabled @endif >
                    <i class="fas fa-trash-alt"></i>
                    Eliminar
                </button>
                <a href="{{ route('etiquetas.print', $articulos_id) }}" target="_blank" class="btn btn-tool"><i class="fas fa-print"></i> Imprimir Etiqueta</a>
            @endif

            @if($nuevo || $editar)
                <button class="btn btn-tool" wire:click="limpiarArticulos"><i class="fas fa-ban"></i> Cancelar</button>
            @endif

        </div>
    </div>

    <div class="card-body">

        @if($nuevo || $editar)
            @include('dashboard.etiquetas.form_articulos')
        @else
            <div class="row m-5">
                <div class="col-12">
                    Debes seleccionar un Bien para empezar...
                </div>
            </div>
        @endif

    </div>

    {{--{!! verSpinner() !!}--}}

    <div class="overlay-wrapper" wire:loading
         wire:target="cerrarBusqueda, saveArticulos, destroy, confirmed">
        <div class="overlay">
            <div class="spinner-border text-navy" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
    </div>

    <div class="overlay-wrapper d-none cargar_buscar">
        <div class="overlay">
            <div class="spinner-border text-navy" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
    </div>

</div>
