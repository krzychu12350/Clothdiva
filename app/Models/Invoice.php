<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_invoice';
    public $timestamps = false;
    protected $fillable = [
        'netto_prize',
        'VAT_prize',
        'VAT_rate',
        'brutto_prize',
    ];
    
    public function user_address(){
        return $this->belongsTo(Invoice::class);
    }

    public function order()
    {
        return $this->hasOne(Order::class);
    }
}
