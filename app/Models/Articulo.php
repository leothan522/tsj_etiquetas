<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Articulo extends Model
{
    use HasFactory;
    protected $table = "articulos";
    protected $fillable = [
        'identificador',
        'descripcion',
        'categorias_id',
        'procedencias_id',
        'marca',
        'modelo',
        'serial',
        'color',
        'adicional',
        'imagen',
        'mini',
        'detail',
        'cart',
        'banner'
    ];

    public function categoria(): BelongsTo
    {
        return $this->belongsTo(Categoria::class, 'categorias_id', 'id');
    }

    public function procedencia(): BelongsTo
    {
        return $this->belongsTo(Procedencia::class, 'procedencias_id', 'id');
    }

    public function scopeBuscar($query, $keyword)
    {
        return $query->where('codigo', 'LIKE', "%$keyword%")
            ->orWhere('descripcion', 'LIKE', "%$keyword%")
            ;
    }

}
