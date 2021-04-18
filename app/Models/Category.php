<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'name',
        'picture'
    ];

    public function product(): \Illuminate\Database\Eloquent\Relations\BelongsToMany {
        return $this->belongsToMany(Product::class, 'product_category');
    }
}
