<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo_gallery extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_photo';

    public function product(){
        return $this->belongsTo(Product::class);
    }
}
