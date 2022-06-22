<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Vendor extends Authenticatable
{

    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'vendors';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'vendor_name',
        'email',
        'phone_no',
        'user_id',
        'status',
        'location',
        'vendor_logo'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];


    public function products()
    {
        return $this->hasMany('App\Models\Products', 'vendor_id', 'id');
    }

}
