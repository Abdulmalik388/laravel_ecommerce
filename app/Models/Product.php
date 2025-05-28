<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
   

    // Add this property:
    protected $fillable = [
        'name',
        'price',
        'image',
    ];
}