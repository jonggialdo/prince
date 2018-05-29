<?php


namespace App;
use Illuminate\Database\Eloquent\Model;
use App\User;

class VerificationToken extends Model
{
  //VerificationToken model

  protected $fillable = ['token'];

  public function getRouteKeyName()
  {
      return 'token';
  }

  public function user()
  {
    return $this->belongsTo(User::class);
  }



}
