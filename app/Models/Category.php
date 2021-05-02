<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_category';

    protected $fillable = [
        'name_of_category',
    ];
    
    public function sub_categories()
    {
        return $this->hasMany(Sub_category::class);
    }
}
