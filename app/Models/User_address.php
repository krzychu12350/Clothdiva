<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_address extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_user_address';

    protected $fillable = [
        'name_of_city',
        'post_code',
        'name_of_street',
        'voideship',
        'county',
        'apartment_number',
        'house_number',
    ];
   
    /**
     * Get the comments for the blog post.
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }
    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
}
