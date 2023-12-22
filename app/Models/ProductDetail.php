<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'product_details';

    // Trong tệp Configuration.php (mô hình Configuration)
    protected $fillable = ['config_id'];

//    public function productDetail()
//    {
//        return $this->hasOne(ProductDetail::class, 'config_id');
//    }

    public function productDetail()
    {
        return $this->hasMany(ProductDetail::class, 'config_id');
    }

    public function configuration()
    {
        return $this->belongsTo(Configuration::class, 'config_id');
    }


}
