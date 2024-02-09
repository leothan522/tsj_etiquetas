<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Articulo;
use App\Models\Categoria;
use App\Models\Procedencia;
use Illuminate\Validation\Rule;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class EtiquetasComponent extends Component
{
    use LivewireAlert;
    use WithPagination;
    use WithFileUploads;

    protected $paginationTheme = 'bootstrap';

    protected $listeners = [
        'confirmed', 'buscarArticulo',
        'listarSelectCategorias', 'setSelectCategorias', 'getCategoria', 'initSelectCategorias',
        'listarSelectProcedencias', 'setSelectProcedencias', 'getProcedencia', 'initSelectProcedencias',
    ];

    public $nuevo = false, $editar = false, $articulos_id, $keyword;
    public $identificador, $descripcion, $categorias_id, $procedencias_id, $marca, $modelo, $serial, $imagen,
        $verMini, $borrar_imagen, $borrar_path, $color, $adicional;

    public function render()
    {
        $articulos = Articulo::buscar($this->keyword)->orderBy('identificador', 'ASC')->paginate(numRowsPaginate());
        $rowsArticulos = Articulo::count();
        return view('livewire.dashboard.etiquetas-component')
            ->with('listarArticulos', $articulos)
            ->with('rowsArticulos', $rowsArticulos)
            ;
    }

    public function limpiarArticulos()
    {
        $this->reset([
            'nuevo', 'editar', 'keyword', 'articulos_id',
            'identificador', 'descripcion', 'categorias_id', 'procedencias_id', 'marca', 'modelo', 'serial',
            'imagen', 'verMini', 'borrar_imagen', 'borrar_path', 'color', 'adicional'
        ]);
        $this->resetErrorBag();
    }

    public function create()
    {
        $this->limpiarArticulos();
        $this->initSelectCategorias();
        $this->initSelectProcedencias();
        $this->nuevo = true;
    }

    protected function rules()
    {
        return [
            'identificador' => ['required', 'min:4', 'max:40', 'alpha_num:ascii', Rule::unique('articulos', 'identificador')->ignore($this->articulos_id)],
            'descripcion' => 'required|min:4|max:40',
            'categorias_id' => 'required',
            'procedencias_id' => 'required',
            'marca' => 'nullable|max:40',
            'modelo' => 'nullable|max:40',
            'serial' => 'required|max:40',
            'imagen' => 'image|max:1024|nullable',
            'color' => 'nullable|max:40',
        ];
    }

    public function save()
    {
        $this->validate();

        if ($this->articulos_id) {
            //editar
            $articulo = Articulo::find($this->articulos_id);
            $imagen = $articulo->imagen;
        } else {
            //nuevo
            $articulo = new Articulo();
            $imagen = null;
        }
        $articulo->identificador = $this->identificador;
        $articulo->descripcion = $this->descripcion;
        $articulo->categorias_id = $this->categorias_id;
        $articulo->procedencias_id = $this->procedencias_id;
        $articulo->marca = $this->marca;
        $articulo->modelo = $this->modelo;
        $articulo->serial = $this->serial;
        $articulo->color = $this->color;
        $articulo->adicional = $this->adicional;

        if ($this->imagen) {
            $ruta = $this->imagen->store("public/articulos");
            $articulo->imagen = str_replace('public/', 'storage/', $ruta);
            //miniaturas
            $nombre = explode("articulos/", $articulo->imagen);
            $path_data = "storage/articulos/size_" . $nombre[1];
            $miniatura = crearMiniaturas($articulo->imagen, $path_data);
            $articulo->mini = $miniatura['mini'];
            $articulo->detail = $miniatura['detail'];
            $articulo->cart = $miniatura['cart'];
            $articulo->banner = $miniatura['banner'];
            //borramos imagenes anteriones si existen
            if ($imagen){
                borrarImagenes($this->borrar_imagen, 'articulos');
            }
        } else {
            if (!$this->verMini){
                $articulo->imagen = null;
                $articulo->mini = null;
                $articulo->detail = null;
                $articulo->cart = null;
                $articulo->banner = null;
                borrarImagenes($this->borrar_imagen, 'articulos');
            }
        }


        $articulo->save();

        $this->edit($articulo->id);
        $this->alert('success', 'Datos Guardados.');
    }

    public function edit($id)
    {
        $this->limpiarArticulos();
        $this->initSelectCategorias();
        $this->initSelectProcedencias();
        $articulo = Articulo::find($id);
        $this->articulos_id = $articulo->id;
        $this->identificador = $articulo->identificador;
        $this->descripcion = $articulo->descripcion;
        $this->categorias_id = $articulo->categorias_id;
        $this->procedencias_id = $articulo->procedencias_id;
        $this->marca = $articulo->marca;
        $this->modelo = $articulo->modelo;
        $this->serial = $articulo->serial;
        $this->verMini = $articulo->mini;
        $this->borrar_imagen = $articulo->imagen;
        $this->color = $articulo->color;
        $this->adicional = $articulo->adicional;
        $this->emit('setSelectCategorias', $this->categorias_id);
        $this->emit('setSelectProcedencias', $this->procedencias_id);
        $this->nuevo = false;
        $this->editar = true;
    }

    public function destroy($id)
    {
        $this->articulos_id = $id;
        $this->confirm('¿Estas seguro?', [
            'toast' => false,
            'position' => 'center',
            'showConfirmButton' => true,
            'confirmButtonText' => '¡Sí, bórralo!',
            'text' => '¡No podrás revertir esto!',
            'cancelButtonText' => 'No',
            'onConfirmed' => 'confirmed',
        ]);
    }

    public function confirmed()
    {
        $row = Articulo::find($this->articulos_id);
        $borrar_imagen = $row->imagen;
        $borrar_path = "articulos/$row->identificador";

        //codigo para verificar si realmente se puede borrar, dejar false si no se requiere validacion
        $vinculado = false;

        if ($vinculado) {
            $this->alert('warning', '¡No se puede Borrar!', [
                'position' => 'center',
                'timer' => '',
                'toast' => false,
                'text' => 'El registro que intenta borrar ya se encuentra vinculado con otros procesos.',
                'showConfirmButton' => true,
                'onConfirmed' => '',
                'confirmButtonText' => 'OK',
            ]);
        } else {
            $row->delete();
            //borramos imagenes anteriones si existen
            if ($borrar_imagen){
                borrarImagenes($borrar_imagen, $borrar_path);
            }
            $this->limpiarArticulos();
            $this->alert('success', 'Bien Eliminado.');
        }
    }

    public function buscarArticulo($keyword)
    {
        $this->keyword = $keyword;
    }


    //********************************* SUBIR IMAGEN *************************************

    public function updatedImagen()
    {
        $this->validate([
            'imagen' => 'image|max:1024', // 1MB Max
        ]);
        /*if ($this->img_imagen_categoria){
            $this->img_borrar_categoria = $this->img_imagen_categoria;
        }*/
    }

    public function btnBorrarImagen()
    {
        if ($this->imagen) {
            $this->reset('imagen');
            $this->resetErrorBag('imagen');
        }else{
            $this->verMini = null;
        }
    }

    //********************************* INIT SELECT *************************************

    public function getCategoria($id)
    {
        $this->categorias_id = $id;
    }

    public function listarSelectCategorias($data)
    {
        //JS
    }

    public function setSelectCategorias($data)
    {
        //JS
    }

    public function initSelectCategorias()
    {
        //$this->reset();
        $listarRows = Categoria::orderBy('nombre', 'ASC')->get();
        $data = array();
        foreach ($listarRows as $row) {
            $option = [
                'id' => $row->id,
                'text' => $row->codigo . " | " . $row->nombre
            ];
            array_push($data, $option);
        }
        $this->emit('listarSelectCategorias', $data);
        $this->emit('setSelectCategorias', $this->categorias_id);
    }

    public function getProcedencia($id)
    {
        $this->procedencias_id = $id;
    }

    public function listarSelectProcedencias($data)
    {
        //JS
    }

    public function setSelectProcedencias($data)
    {
        //JS
    }

    public function initSelectProcedencias()
    {
        //$this->reset();
        $listarRows = Procedencia::orderBy('nombre', 'DESC')->get();
        $data = array();
        foreach ($listarRows as $row) {
            $option = [
                'id' => $row->id,
                'text' => $row->codigo . " | " . $row->nombre
            ];
            array_push($data, $option);
        }
        $this->emit('listarSelectProcedencias', $data);
        $this->emit('setSelectProcedencias', $this->procedencias_id);
    }

}
