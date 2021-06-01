<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_order';
    public $timestamps = false;
    protected $fillable = [
        'status',
        'date_of_placing_order',
        'payment_method',
        //'id_invoice',
        'id_user',
    ];

    public function products(){
        return $this->hasMany(Product::class);
    }
    
   /* public function invoice()
    {
        return $this->hasOne(Invoice::class);
    }  */
    
    public function shop_users()
    {
        return $this->belongsTo(Shop_User::class);
    }
    

}
