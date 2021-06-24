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
        'order_value',
        //'id_invoice',
        'id_ushop',
    ];

    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }

    public function products(){
        return $this->belongsToMany(Product::class);
    }
    
  /*  public function invoice()
    {
        return $this->hasOne(Invoice::class);
    }  */
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    

}
