<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['id','user_name', 'user_address', 'user_phone', 'product_id', 'quantity', 'total_price', 'status','payment_proof'];

        public function product()
        {
            return $this->belongsTo(Product::class);
        }
        protected $casts = [
            'user_data' => 'array',
        ];
}
