<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
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
        'numOfSold'
    ];

    public function photos(): \Illuminate\Database\Eloquent\Relations\HasMany {
        return $this->hasMany(ProductPhoto::class);
    }

    public function categories(): \Illuminate\Database\Eloquent\Relations\BelongsToMany {
        return $this->belongsToMany(Category::class, 'product_category');
    }
}
