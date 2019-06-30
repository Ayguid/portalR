<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Liquidation;

class Liquidation_Item extends Model
{

  protected $fillable = [
    'liquidation_id',
    'nro_liquidacion',
    'algo',
    'otro-algo'
  ];



  public function myLiquidation()
  {
    return $this->belongsTo(Liquidation::class);
  }



}
