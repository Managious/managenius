<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{protected $primaryKey = 'client_id';

    protected $fillable = [
       'client_name',
       'client_city',
       'client_zone',
       'client_type',
       'client_address',
       'client_email',
       'client_phone',
       'client_discount',
       'client_points',
       'points_system',
       'points_reset_date',
       'client_in_partnership',
       'payment_type',
    ];

}
