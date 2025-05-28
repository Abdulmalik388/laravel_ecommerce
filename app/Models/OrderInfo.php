<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderInfo extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'address', 'city', 'state', 'zip', 'shipping_method', 'payment_method'];
}
