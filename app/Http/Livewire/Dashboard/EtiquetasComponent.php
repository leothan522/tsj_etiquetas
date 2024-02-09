<?php

namespace App\Http\Livewire\Dashboard;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;

class EtiquetasComponent extends Component
{
    use LivewireAlert;
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    protected $listeners = ['confirmed', 'buscar'];

    public $nuevo = true, $editar = false, $articulos_id, $keyword;

    public function render()
    {
        return view('livewire.dashboard.etiquetas-component');
    }
    public function prueba()
    {
        $this->alert('success', 'Etiquetas');
    }

}
