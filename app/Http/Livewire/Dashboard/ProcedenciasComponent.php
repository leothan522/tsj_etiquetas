<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Articulo;
use App\Models\Procedencia;
use Illuminate\Validation\Rule;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;

class ProcedenciasComponent extends Component
{
    use LivewireAlert;
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    protected $listeners = [
        'confirmed', 'limpiarProcedencias', 'selectProcedencias'
    ];

    public $nuevo = true, $editar = false, $keyword, $tabla_id;
    public $codigo, $nombre;

    public function render()
    {
        $listarRows = Procedencia::buscar($this->keyword)->orderBy('codigo', 'ASC')->get();
        $rows = Procedencia::count();
        $listarRows->each(function ($row){
            $row->cantidad = Articulo::where('procedencias_id', $row->id)->count();
        });
        return view('livewire.dashboard.procedencias-component')
            ->with('listarRows', $listarRows)
            ->with('rows', $rows);
    }

    public function limpiarProcedencias()
    {
        $this->reset([
            'nuevo', 'editar', 'keyword', 'tabla_id',
            'codigo', 'nombre'
        ]);
        $this->resetErrorBag();
    }

    protected function rules()
    {
        return [
            'codigo' => ['required', 'min:4', 'max:8', 'alpha_num:ascii', Rule::unique('procedencias', 'codigo')->ignore($this->tabla_id)],
            'nombre' => 'required|min:4',
        ];
    }

    public function save()
    {
        $this->validate();

        if ($this->tabla_id) {
            //editar
            $row = Procedencia::find($this->tabla_id);
        } else {
            //nuevo
            $row = new Procedencia();
        }
        $row->codigo = $this->codigo;
        $row->nombre = $this->nombre;
        $row->save();

        $this->limpiarProcedencias();
        $this->emit('selectProcedencias');
        $this->alert('success', 'Datos Guardados.');
    }

    public function edit($id)
    {
        $row = Procedencia::find($id);
        $this->tabla_id = $row->id;
        $this->codigo = $row->codigo;
        $this->nombre = $row->nombre;
        $this->nuevo = false;
        $this->editar = true;
    }

    public function destroy($id)
    {
        $this->tabla_id = $id;
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
        $row = Procedencia::find($this->tabla_id);

        //codigo para verificar si realmente se puede borrar, dejar false si no se requiere validacion
        $vinculado = false;
        $articulo = Articulo::where('procedencias_id', $row->id)->first();
        if ($articulo){
            $vinculado = true;
        }

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
            $this->limpiarProcedencias();
            $this->emit('selectProcedencias');
            $this->alert('success', 'Procedencia Eliminada.');

        }
    }

    public function buscar()
    {
        //$this->keyword
    }

    public function selectProcedencias()
    {
        //JS
    }


}
