<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Proveedor extends Model
{
    use HasFactory;
    protected $table = 'proveedores';
    protected $fillable = ['nif', 'nombre', 'apellido1', 'apellido2',
        'razonSocial', 'denominacion', 'comentario', 'autonomo'
    ];
    public function articulos() : HasMany
    {
        return $this->hasMany(Articulo::class);
    }
}
