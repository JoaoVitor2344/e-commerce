<?php

namespace App\Models;

use App\Enums\StoreStatusEnum;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Store extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'user_id',
        'status'
    ];

    protected $casts = [
        'status' => StoreStatusEnum::class
    ];

    public function products(): Attribute
    {
        return Attribute::make(
            get: fn($value) => $this->hasMany(Product::class, 'store_id'),
        );
    }
}
