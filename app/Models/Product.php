<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_product';

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function photo_gallery(){
        return $this->hasMany(Photo_gallery::class);
    }

    public function promotion(){
        return $this->belongsTo(Promotion::class);
    }

    public function favorite_products()
    {
        return $this->hasMany(Favorite_product::class);
    }

    public function sub_category()
    {
        return $this->belongsTo(Sub_category::class);
    }

}
