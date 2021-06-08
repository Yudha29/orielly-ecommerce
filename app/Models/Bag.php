<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bag extends Model
{
    use Uuids;
    use HasFactory;
    use SoftDeletes;

    public $incrementing = false;
    protected $keyType = 'string';
    protected $table = 'bag';

    protected $fillable = [
        'product_id',
        'quantity',
        'user_id'
    ];

    public function product(): \Illuminate\Database\Eloquent\Relations\HasOne {
        return $this->hasOne(Product::class);
    }

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo {
        return $this->belongsTo(User::class);
    }
}
