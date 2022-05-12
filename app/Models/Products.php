<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;



    public function vendors()
    {
        return $this->belongsTo('App\Models\Vendor','vendor_id');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Categories','category_id');
    }

}
