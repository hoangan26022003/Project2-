<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['name'];

    protected $table = 'categories';

    public function products()
    {
        return $this->hasMany(Product::class, 'cat_id');
    }


}
