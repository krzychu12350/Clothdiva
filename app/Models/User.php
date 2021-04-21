<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_user';
    /**
     * Get the post that owns the comment.
     */
    public function role()
    {
        return $this->belongsTo(Role::class);
    }
    public function user_address()
    {
        return $this->belongsTo(User_address::class);
    }
}
