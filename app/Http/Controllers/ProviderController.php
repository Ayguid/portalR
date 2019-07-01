<?php

namespace App\Http\Controllers;

use App\Provider;
use Illuminate\Http\Request;

class ProviderController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth:admin');
  }
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    //
    $providers=Provider::paginate(5);

    $data=[
      'providers'=>$providers
    ];
    return view('admin.providers')->with('data', $data);
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    //
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    $validatedData = $request->validate([
      'provider_name' => 'required|unique:providers|max:255',
      'provider_email' => 'required',
      'provider_tel' => 'required',
    ]);
    if (!$validatedData) {
      return redirect(route('admin.showProviders'));
    }
    else {
      $provider = new Provider($request->all());
      $provider->save();
      return redirect(route('admin.showProviders'))->with('status', 'Proveedor Agregado!');
    }
  }

  /**
  * Display the specified resource.
  *
  * @param  \App\Provider  $provider
  * @return \Illuminate\Http\Response
  */
  public function show(Provider $provider, $id)
  {
    //
    $data = [
      'provider'=>$provider->find($id)
    ];
    return view('admin.provider')->with('data', $data);
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  \App\Provider  $provider
  * @return \Illuminate\Http\Response
  */
  public function edit(Provider $provider)
  {
    //
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  \App\Provider  $provider
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, Provider $provider)
  {
    //
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  \App\Provider  $provider
  * @return \Illuminate\Http\Response
  */
  public function destroy(Provider $provider)
  {
    //
  }
}
