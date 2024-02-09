<form wire:submit.prevent="save" xmlns:wire="http://www.w3.org/1999/xhtml">

<div class="row">

        <div class="col-md-6">

            <div class="card card-outline card-navy">

                <div class="card-header">
                    <h5 class="card-title">Datos Básicos</h5>
                    <div class="card-tools">
                        <span class="btn-tool"><i class="fas fa-book"></i></span>
                    </div>
                </div>

                <div class="card-body">


                    <div class="form-group">
                        <label for="name">Identificador:</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-bookmark"></i></span>
                            </div>
                            <input type="text" class="form-control" wire:model.defer="identificador" placeholder="alfanumérico">
                            @error('identificador')
                            <span class="col-sm-12 text-sm text-bold text-danger">
                                <i class="icon fas fa-exclamation-triangle"></i>
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email">Descripción:</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-bookmark"></i></span>
                            </div>
                            <input type="text" class="form-control" wire:model.defer="descripcion" placeholder="Descripción corta del articulo">
                            @error('descripcion')
                            <span class="col-sm-12 text-sm text-bold text-danger">
                                <i class="icon fas fa-exclamation-triangle"></i>
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email">Categoría:</label>
                        <div wire:ignore>
                            <div class="input-group mb-3" id="div_select_categorias">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="far fa-bookmark"></i></span>
                                </div>
                                <select class="custom-select">
                                    <option value="">Seleccione</option>
                                </select>
                            </div>
                        </div>
                        @error('categorias_id')
                        <span class="col-sm-12 text-sm text-bold text-danger">
                            <i class="icon fas fa-exclamation-triangle"></i>
                            {{ $message }}
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">Procedencia:</label>
                        <div wire:ignore>
                            <div class="input-group mb-3" id="div_select_procedencias">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="far fa-bookmark"></i></span>
                                </div>
                                <select class="custom-select">
                                    <option value="">Seleccione</option>
                                </select>
                            </div>
                        </div>
                        @error('procedencias_id')
                        <span class="col-sm-12 text-sm text-bold text-danger">
                            <i class="icon fas fa-exclamation-triangle"></i>
                            {{ $message }}
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">Marca:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-bookmark"></i></span>
                            </div>
                            <input type="text" class="form-control" wire:model.defer="marca" placeholder="Marca (Opcional)">
                            @error('marca')
                            <span class="col-sm-12 text-sm text-bold text-danger">
                                <i class="icon fas fa-exclamation-triangle"></i>
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email">Modelo:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-bookmark"></i></span>
                            </div>
                            <input type="text" class="form-control" wire:model.defer="modelo" placeholder="Modelo (Opcional)">
                            @error('modelo')
                            <span class="col-sm-12 text-sm text-bold text-danger">
                                <i class="icon fas fa-exclamation-triangle"></i>
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email">Serial:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-bookmark"></i></span>
                            </div>
                            <input type="text" class="form-control" wire:model.defer="serial" placeholder="Serial (Opcional)">
                            @error('serial')
                            <span class="col-sm-12 text-sm text-bold text-danger">
                                <i class="icon fas fa-exclamation-triangle"></i>
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                    </div>





                </div>

            </div>

        </div>

        <div class="col-md-6">

            <div class="card card-outline card-navy">
                <div class="card-header">
                    <h5 class="card-title">Datos Adicionales</h5>
                    <div class="card-tools">
                        <span class="btn-tool"><i class="fas fa-book"></i></span>
                    </div>
                </div>
                <div class="card-body">

                    <div class="row justify-content-center attachment-block p-3">

                        <div class="col-md-12">
                            <label class="col-md-12" for="name">
                                Imagen
                                <span class="badge float-right"><i class="fas fa-image"></i></span>
                            </label>

                        </div>

                        <div class="col-md-8 mb-3 mt-3">
                            <div class="text-center" style="cursor: pointer;">
                                <img class="img-thumbnail"
                                     @if ($imagen) src="{{ $imagen->temporaryUrl() }}" @else src="{{ asset(verImagen($verMini)) }}" @endif
                                     {{--width="101" height="100"--}}  alt="Imagen Categoria" onclick="clickInputImagen()"/>
                                @if($verMini || $imagen)
                                    <button type="button" class="btn badge @if(!$imagen) text-danger @endif position-absolute float-right"
                                            wire:click="btnBorrarImagen">
                                        @if($imagen)
                                            <i class="fas fa-times-circle"></i>
                                            {{--<i class="far fa-times-circle"></i>--}}
                                        @else
                                            <i class="fas fa-trash-alt"></i>
                                        @endif
                                    </button>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="input-group d-none">
                                <div class="custom-file">
                                    <input type="file" wire:model="imagen" class="custom-file-input" id="customFileLangImagen"
                                           lang="es" accept="image/jpeg, image/png">
                                    <label class="custom-file-label text-sm" for="customFileLangImagen" data-browse="Elegir">
                                        Seleccionar Imagen
                                    </label>
                                </div>
                                <input type="text" wire:model="borrar_imagen">
                            </div>
                            @error('imagen')
                            <span class="text-sm text-bold text-danger text-center">
                                <i class="icon fas fa-exclamation-triangle"></i>
                                 {{ $message }}
                            </span>
                            @enderror
                        </div>

                    </div>


                    <div class="form-group">
                        <label for="email">Color:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-bookmark"></i></span>
                            </div>
                            <input type="text" class="form-control" wire:model.defer="color" placeholder="Color (Opcional)">
                            @error('color')
                            <span class="col-sm-12 text-sm text-bold text-danger">
                                <i class="icon fas fa-exclamation-triangle"></i>
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name">Información Adicional:</label>
                        <div class="input-group">
                            <textarea class="form-control" wire:model.defer="adicional" placeholder="Información Adicional (Opcional)"></textarea>
                            @error('adicional')
                            <span class="col-sm-12 text-sm text-bold text-danger">
                                <i class="icon fas fa-exclamation-triangle"></i>
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                    </div>

                </div>
            </div>

        </div>
</div>

<div class="row justify-content-end">
        <div class="col-md-4">
            <button type="submit" class="btn btn-block btn-success float-right mr-1">
                <i class="fas fa-save"></i> Guardar
            </button>
        </div>
    </div>
</form>
