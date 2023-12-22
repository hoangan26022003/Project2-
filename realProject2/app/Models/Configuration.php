<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    protected $fillable = ['name', 'price', 'product_id'];

    public function specifications()
    {
        return $this->hasMany(Specification::class, 'config_id');
    }


}
