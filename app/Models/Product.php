<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_product';
    public $timestamps = false;
    protected $fillable = [
        'name',
        'quantity',
        'prize',
        'color',
        'size_of_product',
        'description',
        'composition_and_conservation',
        'id_subcategory',
        'id_promotion',
       // 'id_order',
    ];

   public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
    
    public function image(){
        return $this->hasMany(Image::class);
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
