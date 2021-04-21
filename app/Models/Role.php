<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_role';
    
    /**
     * Get the comments for the blog post.
     */
    public function user()
    {
        return $this->hasMany(User::class);
    }
}
