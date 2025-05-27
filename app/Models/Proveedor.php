<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Proveedor extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'contacto',
        'telefono',
        'direccion',
    ];

    public function compras(): HasMany
    {
        return $this->hasMany(Compra::class);
    }
}
