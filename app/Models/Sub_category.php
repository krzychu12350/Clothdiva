<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_category extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_sub_category';
    public $incrementing = true;
    //protected $keyType = 'integer';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name_of_subcategory'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
