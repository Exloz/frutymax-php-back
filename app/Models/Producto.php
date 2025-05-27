<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'stock',
        'categoria_id',
    ];

    protected $casts = [
        'precio' => 'decimal:2',
        'stock' => 'integer',
    ];

    public function categoria(): BelongsTo
    {
        return $this->belongsTo(Categoria::class);
    }

    public function detalleCompras(): HasMany
    {
        return $this->hasMany(DetalleCompra::class);
    }

    public function detalleVentas(): HasMany
    {
        return $this->hasMany(DetalleVenta::class);
    }
}
