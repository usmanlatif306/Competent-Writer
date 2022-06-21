<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Urgency extends Model
{

    protected $fillable = [
        'id',
        'type',
        'value',
        'percentage_to_add',
        'inactive', 'api_id', 'origin'
    ];

    static function dropdown()
    {
        $data['types'] = [
            'hours' => 'hours',
            'days' => 'days',
            // 'week' => 'week',
        ];

        return $data;
    }
}
