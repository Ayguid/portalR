@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          {{-- <div class="card-header">User Dashboard</div> --}}
          <div class="card-header">{{$data['user']->provider->provider_name}} Dashboard</div>

          <div class="card-body">
            @if (session('status'))
              <div class="alert alert-success" role="alert">
                {{ session('status') }}
              </div>
            @endif

            {{-- liquidations list START --}}
            <ul class="list-group">
              @foreach ($data['user']->provider->liquidations as $liquidation)
                <li class="list-group-item"><a href="#">{{$liquidation->title}} &nbsp; {{$liquidation->created_at}}</a></li>
                  <ul class="list-group">
                    @foreach ($liquidation->items as $liquidationItem)
                      <li class="list-group-item">{{$liquidationItem}}</li>
                    @endforeach
                  </ul>
              @endforeach
            </ul>
            {{-- liquidations list END  --}}

          </div>

        </div>
      </div>
    </div>
  </div>
@endsection
