<div class="card card-navy" style="height: inherit; width: inherit; transition: all 0.15s ease 0s;" xmlns:wire="http://www.w3.org/1999/xhtml">

    <div class="card-header">
        @if($editar)
            <h3 class="card-title">Editar</h3>
            <div class="card-tools">
                <button class="btn btn-tool" wire:click="limpiarCategorias">
                    <i class="fas fa-ban"></i> Cancelar
                </button>
            </div>
            @else
            <h3 class="card-title">Crear Categoria</h3>
            <div class="card-tools">
                <span class="btn btn-tool" wire:click="limpiarCategorias"><i class="fas fa-sync-alt"></i></span>
            </div>
        @endif
    </div>

    <div class="card-body">


        <form wire:submit.prevent="save">

            <div class="form-group">
                <label for="name">Codigo</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-code"></i></span>
                    </div>
                    <input type="text" class="form-control" wire:model.defer="codigo" placeholder="Codigo">
                    @error('codigo')
                    <span class="col-sm-12 text-sm text-bold text-danger">
                        <i class="icon fas fa-exclamation-triangle"></i>
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="name">{{ __('Name') }}</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-tag"></i></span>
                    </div>
                    <input type="text" class="form-control" wire:model.defer="nombre" placeholder="Nombre">
                    @error('nombre')
                    <span class="col-sm-12 text-sm text-bold text-danger">
                        <i class="icon fas fa-exclamation-triangle"></i>
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group mt-3">
                <button type="submit" class="btn btn-block @if($nuevo) btn-success @else btn-primary @endif"
                {{--@if(!comprobarPermisos('categoria.create')) disabled @endif--}} >
                    <i class="fas fa-save"></i> Guardar @if($tabla_id) Cambios @endif
                </button>
            </div>

        </form>




    </div>

    {{--{!! verSpinner() !!}--}}

</div>
