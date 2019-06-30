@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Proveedores</div>
                {{--  --}}
                <a href="{{route('admin.dashboard')}}" class="btn btn-primary">Panel principal.</a>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  {{--  --}}
                  @isset($data['providers'])
                    <ul class="list-group">
                    @foreach ($data['providers'] as $provider)
                      <li class="list-group-item"><a href="{{route('showProvider', $provider)}}">{{$provider->provider_name}} &nbsp; {{$provider->provider_email}}</a></li>
                    @endforeach
                      <li class="list-group-item"><a href="#" class="btn btn-secondary">Agregar Proveedor</a></li> 
                  </ul>
                    {{$data['providers']->links()}}
                  @endisset
                  {{--  --}}




                </div>
                {{--  --}}
            </div>
        </div>
    </div>
</div>
@endsection
