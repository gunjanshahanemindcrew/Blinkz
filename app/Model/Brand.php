<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{

    protected $casts = [
        'status'     => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
    public function brandProducts()
    {
        return $this->hasMany(Product::class);
    }
}
