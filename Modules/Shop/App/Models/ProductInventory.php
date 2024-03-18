<?php

namespace Modules\Shop\App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Shop\Database\factories\ProductInventoryFactory;

class ProductInventory extends Model
{
    use HasFactory, HasUuids;

    /**
     * The attributes that are mass assignable.
     */
    protected $table = 'shop_product_inventories';
    // protected $fillable = [];
    protected $guarded = ['id'];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    protected static function newFactory(): ProductInventoryFactory
    {
        return ProductInventoryFactory::new();
    }
}
