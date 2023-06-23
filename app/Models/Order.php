<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $casts = [
        'items'=>'array',
        'location'=>'array'
    ];

    protected $fillable = [
        'user_id',
        'items',
        'company_id',
        'locations',
        'userName',
        'userPhone',
        'paymentUrl',
    ];
}
