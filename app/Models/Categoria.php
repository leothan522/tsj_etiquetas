<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Categoria extends Model
{
    use HasFactory;
    protected $table = "categorias";
    protected $fillable = [
        'codigo',
        'nombre',
        'cantidad',
    ];

    public function articulos(): HasMany
    {
        return $this->hasMany(Articulo::class, 'categorias_id', 'id');
    }

    public function scopeBuscar($query, $keyword)
    {
        return $query->where('codigo', 'LIKE', "%$keyword%")
            ->orWhere('nombre', 'LIKE', "%$keyword%")
            ;
    }

}
