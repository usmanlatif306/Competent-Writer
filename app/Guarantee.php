<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guarantee extends Model
{
    protected $fillable = [
        'id',
        'name',
        'percentage_to_add',
        'inactive', 'api_id', 'origin'
    ];

    protected $casts = [
        'inactive' => 'boolean'
    ];
}
