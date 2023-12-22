<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['amount', 'until_price', 'order_id', 'pro_de_id', ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }


    public function productDetail()
    {
        return $this->belongsTo(ProductDetail::class, 'pro_de_id');
    }
}
