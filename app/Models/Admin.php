<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model implements \Illuminate\Contracts\Auth\Authenticatable
{
    use HasFactory;
    use Authenticatable;

    protected $table = 'admins';
    public $timestamps = false;
    protected $fillable = ['name', 'email', 'address', 'phone_number', 'password'];

    public function admins()
    {
        return $this->hasMany(Admin::class);
    }

}
