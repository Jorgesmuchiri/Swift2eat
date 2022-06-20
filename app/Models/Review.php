<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;


    protected $table = 'customer_reviews';

    public function vendor()
    {
        return $this->belongsTo('App\Models\Vendor','vendor_id');
    }
}
