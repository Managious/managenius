<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $primaryKey = 'order_id';

    protected $fillable = [
       'product_id',
       'client_id',
       'quantity',
       'unitprice',
       'total',
       'discount',
       
    ];
}
