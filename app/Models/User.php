<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;
    //use HasFactory;
    /*protected $primaryKey = 'id_user';*/
    //public $incrementing = true;
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
        'password',
        'id_role',
        //'is_admin',
        
    ];
 
=======
        'password'];
    /*change*/
>>>>>>> 97084e1 (fafa)
    protected $hidden = [
        'password', 'remember_token'];
    public $timestamps = false;
    
    
    public function roles(){
        return $this->belongsTo(Role::class);
    }
<<<<<<< HEAD
  /*
=======

    /*
>>>>>>> 97084e1 (fafa)
    public function favorite_products()
    {
        return $this->hasMany(Favorite_product::class);
    }
    
    public function orders(){
        return $this->hasMany(Order::class);
    }
    */
}
