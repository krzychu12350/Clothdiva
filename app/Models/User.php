<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_user';

    public function role(){
        return $this->belongsTo(Role::class);
    }

    public function favorite_products()
    {
        return $this->hasMany(Favorite_product::class);
    }
    
    public function orders(){
        return $this->hasMany(Order::class);
    }
}
