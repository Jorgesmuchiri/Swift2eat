<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Cart extends Model
{
    use HasApiTokens, HasFactory;

    protected $table = 'cart';

    protected $fillable = [
        'product_id',
        'user_id',
        'vendor_id',
        'quantity'
    ];

    public function products()
    {
        return $this->hasMany('App\Models\Products', 'id', 'product_id');
    }

    public function vendors()
    {
        return $this->hasMany('App\Models\Vendor', 'id', 'vendor_id');
    }
}
