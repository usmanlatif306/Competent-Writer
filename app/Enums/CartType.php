<?php

namespace App\Enums;

abstract class CartType
{
    const NewOrder         = 'new_order';
    const UpdateOrder         = 'update_order';
    const WalletTopUp     = 'wallet_top_up';
}
