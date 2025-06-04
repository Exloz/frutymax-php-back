<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'unit',
        'image',
        'category',
        'stock',
        'status',
        'supplier_id',
        'nutritional_info',
        'origin',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'stock' => 'integer',
        'nutritional_info' => 'array',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Status constants
     */
    public const STATUS_ACTIVE = 'active';
    public const STATUS_INACTIVE = 'inactive';
    public const STATUS_OUT_OF_STOCK = 'out_of_stock';

    /**
     * Get the supplier that owns the product.
     */
    public function supplier(): BelongsTo
    {
        return $this->belongsTo(Supplier::class);
    }

    /**
     * Get the order items for the product.
     */
    public function orderItems(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }

    /**
     * Get the URL for the product image.
     */
    public function getImageUrlAttribute(): ?string
    {
        if (!$this->image) {
            return null;
        }

        return Storage::url($this->image);
    }

    /**
     * Scope a query to only include active products.
     */
    public function scopeActive($query)
    {
        return $query->where('status', self::STATUS_ACTIVE);
    }

    /**
     * Scope a query to only include low stock products.
     */
    public function scopeLowStock($query, $threshold = 10)
    {
        return $query->where('stock', '<=', $threshold);
    }

    /**
     * Check if the product is in stock.
     */
    public function isInStock(): bool
    {
        return $this->stock > 0 && $this->status === self::STATUS_ACTIVE;
    }

    /**
     * Update the stock level.
     */
    public function updateStock(int $quantity): void
    {
        $this->stock = $quantity;
        
        // Update status based on stock level
        if ($this->stock <= 0) {
            $this->status = self::STATUS_OUT_OF_STOCK;
        } elseif ($this->status === self::STATUS_OUT_OF_STOCK) {
            $this->status = self::STATUS_ACTIVE;
        }
        
        $this->save();
    }
}
