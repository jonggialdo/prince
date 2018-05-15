<?php

namespace App;
use Eloquent;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticable;

use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class User extends Model  implements  \Illuminate\Contracts\Auth\Authenticatable
{
    use AuthenticableTrait;

    public function role()
    {
        return $this->hasOne('App\Role','id');
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
}
