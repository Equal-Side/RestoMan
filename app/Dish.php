<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\SoftDeletes;


class Dish extends Model
{
    use SoftDeletes;

    public $date = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'dish_photo',
        'name',
        'price',
        'type',
        'is_available',
    ];


}
