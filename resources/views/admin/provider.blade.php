@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Proveedor</div>
          {{--  --}}
          <a href="{{route('admin.dashboard')}}" class="btn btn-primary">Panel principal.</a>

          <div class="card-body">
            @if (session('status'))
              <div class="alert alert-success" role="alert">
                {{ session('status') }}
              </div>
            @endif

            {{--  --}}
            <ul class="list-group">
              <li class="list-group-item"><a class="btn btn-secondary" href="{{route('showProviders')}}">Proveedores</a></li>
            </ul>

            @isset($data['provider'])
              <ul class="list-group">
                <li class="list-group-item"><strong>Nombre</strong> : <h4>{{$data['provider']->provider_name}}</h4> </li>
                <li class="list-group-item"><strong>Email</strong> :  {{$data['provider']->provider_email}}</li>
                <li class="list-group-item"><strong>Creado</strong> :  {{$data['provider']->created_at}}</li>
                <li class="list-group-item"><strong>Modificado</strong> : {{$data['provider']->updated_at}}</li>
              </ul>
              <a href="#" class="btn btn-secondary">Historial de liquidaciones</a>
              <a href="#" class="btn btn-secondary">Agregar liquidación</a>
              <a href="#" class="btn btn-secondary">Usuarios</a>
              <a href="#" class="btn btn-secondary">Editar</a>
            @endisset
            {{--  --}}




          </div>
          {{--  --}}
        </div>
      </div>
    </div>
  </div>
@endsection
