<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $fillable = [
        'id',
        'name',
        'price_type_id',
        'price',
        'single_spacing_price',
        'double_spacing_price',
        'minimum_order_quantity',
        'inactive', 'api_id', 'origin'
    ];

    public function price_type()
    {
        return $this->belongsTo('App\PriceType');
    }

    public static function dropdown()
    {
        $data['price_type_list'] = PriceType::pluck('name', 'id')->toArray();

        return $data;
    }
}
