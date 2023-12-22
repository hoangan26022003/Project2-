<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['name', 'price', 'amount', 'product_id'];

    public function configurations()
    {
        return $this->hasMany(Configuration::class);
    }


    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }


    public function specifications()
    {
        return $this->hasMany(Specification::class, 'config_id');
    }

    // Trong tệp ProductDetail.php (mô hình ProductDetail)

    public function configuration()
    {
        return $this->belongsTo(Configuration::class, 'config_id');
    }

    public function productDetail()
    {
        return $this->belongsTo(ProductDetail::class, 'config_id');
    }

//    public function productDetail()
//    {
//        return $this->belongsTo(ProductDetail::class, 'pro_de_id');
//    }

}
