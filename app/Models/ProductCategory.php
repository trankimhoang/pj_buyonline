<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static find(int $id)
 */
class ProductCategory extends Model
{
    protected $table = 'product_categories';

    protected $fillable = [
        'name'
    ];

    public function product() {
        return $this->hasMany(Product::class, 'category_id');
    }

}
