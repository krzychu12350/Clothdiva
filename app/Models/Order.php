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
        'if_the_order_accepted',
        'date_of_order_addmision',
        'shipping_date',
        'if_the_order_completed',
        'date_of_order_fufillment',
    ];

    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }

    public function products(){
        return $this->hasMany(Product::class);
    }

    public function invoice()
    {
        return $this->hasOne(Invoice::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
