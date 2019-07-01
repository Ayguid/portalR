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
            @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif
            {{--  --}}
            @isset($data['providers'])
              <ul class="list-group">
                @foreach ($data['providers'] as $provider)
                  <li class="list-group-item"><a href="{{route('admin.showProvider', $provider)}}">{{$provider->provider_name}} &nbsp; {{$provider->provider_email}}</a></li>
                @endforeach

                <!-- Modal START -->
                <!-- Button trigger modal -->
                <li class="list-group-item"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                  Agregar Proveedor
                </button></li>
                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Agregar un proveedor</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        {{-- form start--}}
                        @php
                        $provider = new App\Provider();
                        @endphp
                        <form class="" action="{{route('admin.addProvider')}}" method="post">
                          @csrf
                          @foreach ($provider->getFillable() as $fillable)
                            <div class="form-group row">
                              <label for="inputEmail3" class="col-sm-2 col-form-label">{{$fillable}}</label>
                              <div class="col-sm-10">
                                <input type="{{($fillable == 'provider_email')?'email':'text'}}" name = "{{$fillable}}" class="form-control" id="" placeholder="{{$fillable}}">
                              </div>
                            </div>
                          @endforeach
                          <div class="form-group row">
                            <div class="col-sm-10">
                              <button type="submit" class="btn btn-primary">Agregar</button>
                            </div>
                          </div>
                        </form>
                        {{-- fom end --}}
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal END -->
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
