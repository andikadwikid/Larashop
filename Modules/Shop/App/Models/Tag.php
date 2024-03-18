<?php

namespace Modules\Shop\App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Shop\Database\factories\TagFactory;

class Tag extends Model
{
    use HasFactory, HasUuids;

    /**
     * The attributes that are mass assignable.
     */
    protected $table = 'shop_tags';
    // protected $fillable = [];
    protected $guarded = ['id'];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'shop_product_tags', 'tag_id', 'product_id');
    }

    protected static function newFactory(): TagFactory
    {
        return TagFactory::new();
    }
}
