<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $fillable = [
        'customer_name', 'email', 'address', 'location', 'total_price', 'status',
    ];
}



