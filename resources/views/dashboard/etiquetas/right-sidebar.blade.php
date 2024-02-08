<div class="p-3">
    <ul class="nav nav-pills flex-column">
        {{--<li class="dropdown-divider"></li>--}}
        <li class="nav-item mb-2">
            <span class="text-small text-muted float-right">Tablas</span>
        </li>
        <li class="nav-item">
            <button type="button" class="btn btn-primary btn-sm btn-block m-1"
                    data-toggle="modal" data-target="#modal-categorias" {{--onclick="verCategorias()"--}}
            @if(!comprobarPermisos('categorias.index')) disabled @endif >
                Categorias
            </button>
        </li>

        <li class="nav-item">
            <button type="button" class="btn btn-primary btn-sm btn-block m-1"
                    data-toggle="modal" data-target="#modal-procedencias" onclick="verProcedencias()"
                @if(!comprobarPermisos('procedencias.index')) disabled @endif >
                Procedencias
            </button>
        </li>

        {{--<li class="dropdown-divider"></li>
        <li class="nav-item mb-2">
            <span class="text-small text-muted float-right">Reportes</span>
        </li>
        <li class="nav-item">
            <button type="button" class="btn btn-primary btn-sm btn-block m-1"
                    data-toggle="modal" data-target="#modal-reportes-articulos"
                --}}{{--@if(!comprobarPermisos('almacenes.index')) disabled @endif--}}{{-- >
                Articulos
            </button>
        </li>
        <li class="dropdown-divider"></li>--}}
    </ul>
</div>
