<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Chatting extends Model
{
    protected $casts = [
        'user_id'    => 'integer',
        'status'     => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
    public function seller_info()
    {
        return $this->belongsTo(Seller::class, 'seller_id');
    }

    public function customer()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function shop()
    {
        return $this->belongsTo(Shop::class, 'shop_id');
    }
}
