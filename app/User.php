<?php

namespace App;
use Eloquent;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class User extends Authenticatable
{
    use AuthenticableTrait;
    protected $table = 'users';
    
    public function role()
    {
        return $this->hasOne('App\Role','id');
    }

    public function product()
    {
      return $this->belongsToMany('App\Product');
    }

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'address', 'photo_user', 'gender',  'no_telp',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $guarded = [
      'id', 'role_id',
    ];

    public function cart(){
        return $this->hasMany('App\Cart');
    }
    

}
