<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Contracts\Auth\MustVerifyEmail as MustVerifyEmail;


class User extends Authenticatable implements MustVerifyEmail
{   
    use Notifiable;
    //use HasFactory;
    /*protected $primaryKey = 'id_user';*/
    //public $incrementing = true;
    //protected $keyType = 'integer';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "ushop";
    protected $fillable = [
        'name',
        'surname',
        'mobile',
        'login',
        'email',
        'password',
        'id_role',
        'id_user_address',
        'email_verified_at',
    ];
 
    protected $hidden = [
        'password', 'remember_token',
    ];
  
    protected $casts = [
        'created_at' => 'datetime:dd/mm/YYYY', 
        'updated_at' => 'datetime:d/m/Y',
        'email_verified_at' => 'datetime',
    ];

    public $timestamps = true;
    
    protected $primaryKey = 'id_ushop';
    
    public function role(){
        return $this->belongsTo(Role::class);
    }

    public function user_address(){
        return $this->belongsTo(User_address::class);
    }
  
    public function favorite_products()
    {
        return $this->hasMany(Favorite_product::class);
    }
    
    public function orders(){
        return $this->hasMany(Order::class);
    }
}
