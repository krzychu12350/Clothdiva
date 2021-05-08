<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_user';
    public $incrementing = true;
    //protected $keyType = 'integer';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'surname',
        'mobile',
        'login',
        'email',
<<<<<<< HEAD
<<<<<<< HEAD
        'password',
        'id_role',
        //'is_admin',
        
    ];
 
=======
        'password'];
=======
        'password',
        
    ];
>>>>>>> 12deadb (Revert "fafa")
    /*change*/
>>>>>>> 97084e1 (fafa)
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles(){
        return $this->belongsTo(Role::class);
    }
<<<<<<< HEAD
  /*
=======

<<<<<<< HEAD
    /*
>>>>>>> 97084e1 (fafa)
=======
>>>>>>> 12deadb (Revert "fafa")
    public function favorite_products()
    {
        return $this->hasMany(Favorite_product::class);
    }
    
    public function orders(){
        return $this->hasMany(Order::class);
    }
}
