<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\SoftDeletes;

class Reservation extends Model
{
    use SoftDeletes;

    public $date = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'table_id',
        'name',
        'email',
        'phone',
        'date',
        'time',
        'number_people',
        'message',
    ];

}
