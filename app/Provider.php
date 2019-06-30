<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Liquidation;


class Provider extends Model
{

  protected $fillable = [
    'provider_name',
    'provider_email',
    'provider_tel',
  ];



  public function liquidations()
  {
    return $this->hasMany(Liquidation::class);
  }


}
