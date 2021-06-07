<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use Uuids;
    use HasFactory;
    use SoftDeletes;

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'discount',
        'name',
        'description',
        'merk',
        'price',
        'num_of_sold'
    ];

    public function photos(): \Illuminate\Database\Eloquent\Relations\HasMany {
        return $this->hasMany(ProductPhoto::class);
    }

    public function categories(): \Illuminate\Database\Eloquent\Relations\BelongsToMany {
        return $this->belongsToMany(Category::class, 'product_category');
    }
}
