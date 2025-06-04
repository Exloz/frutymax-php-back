<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Supplier extends Model
{
    protected $fillable = [
        'name',
        'contact_person',
        'email',
        'phone',
        'address',
        'status',
        'tax_id',
        'payment_terms',
        'notes'
    ];

    protected $casts = [
        'status' => 'boolean',
        'payment_terms' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Get the products for the supplier.
     */
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    /**
     * Scope a query to only include active suppliers.
     */
    public function scopeActive($query)
    {
        return $query->where('status', true);
    }

    /**
     * Toggle the supplier's status.
     */
    public function toggleStatus(): bool
    {
        $this->status = !$this->status;
        return $this->save();
    }

    /**
     * Get the supplier's status as a string.
     */
    public function getStatusTextAttribute(): string
    {
        return $this->status ? 'Activo' : 'Inactivo';
    }
}
