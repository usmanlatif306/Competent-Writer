<?php

use Illuminate\Support\Facades\Route;

// change order status
Route::post('order/status', 'Api\OrderController@status');
Route::post('order/comment', 'Api\OrderController@comments');

Route::post('order/create', 'Api\OrderController@order');
