<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_invoice';
    
    public function user_address(){
        return $this->belongsTo(Invoice::class);
    }
}
