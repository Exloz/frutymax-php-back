<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Compra extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecha',
        'total',
        'proveedor_id',
    ];

    protected $casts = [
        'fecha' => 'datetime',
        'total' => 'decimal:2',
    ];

    public function proveedor(): BelongsTo
    {
        return $this->belongsTo(Proveedor::class);
    }

    public function detalleCompras(): HasMany
    {
        return $this->hasMany(DetalleCompra::class);
    }
}
