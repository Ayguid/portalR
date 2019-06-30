<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Liquidation_Item;


class Liquidation extends Model
{

  protected $fillable = [
    'provider_id',
    'title',
    'perdiod_start',
    'perdiod_end',
    'total',
    'cantidad_de_ordenes'
  ];


  public function items()
  {
    return $this->hasMany(Liquidation_Item::class);
  }


}
