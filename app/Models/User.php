<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
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
    
    protected $fillable = [
        'name',
        'surname',
        'mobile',
        'login',
        'email',
        'password',
        'id_role',
        //'is_admin',
        
    ];
 
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public $timestamps = false;
    protected $primaryKey = 'id_user';
    
    public function role(){
        return $this->belongsTo(Role::class);
    }
  /*
    public function favorite_products()
    {
        return $this->hasMany(Favorite_product::class);
    }
    
    public function orders(){
        return $this->hasMany(Order::class);
    }
    */
}
