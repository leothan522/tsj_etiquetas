<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Categoria;
use Illuminate\Validation\Rule;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class CategoriasComponent extends Component
{

    use LivewireAlert;
    use WithPagination;
    use WithFileUploads;

    protected $paginationTheme = 'bootstrap';

    protected $listeners = [
        'confirmed', 'limpiarCategorias'
    ];

    public $nuevo = true, $editar = false, $keyword, $categorias_id;
    public $codigo, $nombre, $cantidad;

    public function render()
    {
        $listarCategorias = Categoria::buscar($this->keyword)->orderBy('codigo', 'ASC')->get();
        $rows = Categoria::count();
        return view('livewire.dashboard.categorias-component')
            ->with('listarRows', $listarCategorias)
            ->with('rows', $rows);
    }

    public function limpiarCategorias()
    {
        $this->reset([
            'nuevo', 'editar', 'keyword', 'categorias_id',
            'codigo', 'nombre', 'cantidad'
        ]);
        $this->resetErrorBag();
    }

    protected function rules()
    {
        return [
            'codigo' => ['required', 'min:4', 'max:8', 'alpha_num:ascii', Rule::unique('categorias', 'codigo')->ignore($this->categorias_id)],
            'nombre' => 'required|min:4',
        ];
    }

    public function save()
    {
        $this->validate();

        if ($this->categorias_id) {
            //editar
            $categorias = Categoria::find($this->categorias_id);
        } else {
            //nuevo
            $categorias = new Categoria();
        }
        $categorias->codigo = $this->codigo;
        $categorias->nombre = $this->nombre;
        $categorias->save();

        $this->limpiarCategorias();
        $this->alert('success', 'Datos Guardados.');
    }

    public function edit($id)
    {
        $categoria = Categoria::find($id);
        $this->categorias_id = $categoria->id;
        $this->codigo = $categoria->codigo;
        $this->nombre = $categoria->nombre;
        $this->nuevo = false;
        $this->editar = true;
    }

    public function destroy($id)
    {
        $this->categorias_id = $id;
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
        $row = Categoria::find($this->categorias_id);

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
            $this->alert('success', 'Categoria Eliminada.');
            $this->limpiarCategorias();
        }
    }

    public function buscarCategoria()
    {
        //$this->keyword
    }


}
