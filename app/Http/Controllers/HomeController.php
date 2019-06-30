<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Liquidation;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

      $data=[
        'user'=>Auth::user(),
      ];

        return view('user.home')->with('data', $data);
    }

    public function showLiquidation(Request $request)
    {
      $data=[
        'liquidation'=>Liquidation::find($request->id)
      ];

      return view('user.liquidation')->with('data', $data);

    }
}
