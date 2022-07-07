<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class Orders extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'orders';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'product_id',
        'customer_id',
        'quantity',
        'status',
        'vendor_id',
        'total',
        'phone',
        'email',
        'instruction',
        'pickup_time'
    ];

    public function products()
    {
        return $this->hasOne('App\Models\Products', 'id', 'product_id');
    }

    public function vendors() {
        return $this->belongsTo('App\Models\Vendor', 'vendor_id');
    }

    public function users() {
        return $this->belongsTo('App\Models\User', 'customer_id');
    }

}
