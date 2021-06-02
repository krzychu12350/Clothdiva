<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_promotion';
    public $timestamps = false;
    protected $fillable = [
        'name_of_promotion',
        'size_of_promotion',
        'promotion_start_date',
        'promotion_end_date',
        'description',
    ];

  /*  public function products(){
        return $this->hasMany(Product::class);
    }*/
   
}
