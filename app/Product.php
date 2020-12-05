<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    public $date = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'price_per_unit',
        'is_available',
        'used',

    ];
}
