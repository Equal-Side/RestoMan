<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;

    public $date = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'customer_id',
        'served_by',
        'table_id',
        'overal_price',
        'status',
        'is_paid',
    ];
}
