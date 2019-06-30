<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Liquidation;

class Liquidation_Item extends Model
{

  protected $fillable = [
    'liquidation_id',
    'nro_liquidacion',
    'total',
    'cantidad_de_ordenes',
  ];



  public function myLiquidation()
  {
    return $this->belongsTo(Liquidation::class);
  }



}
