<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_image';
    public $timestamps = false;
    protected $fillable = [
        'image',
    ];
    /*public function product(){
        return $this->belongsTo(Product::class);
    }*/
}
