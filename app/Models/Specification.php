<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specification extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['name', 'value', 'config_id'];

    public function configuration()
    {
        return $this->belongsTo(Configuration::class, 'config_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

}
