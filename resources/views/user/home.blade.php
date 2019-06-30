@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">{{$data['user']->provider->provider_name}} Dashboard</div>

          <div class="card-body">
            @if (session('status'))
              <div class="alert alert-success" role="alert">
                {{ session('status') }}
              </div>
            @endif

            {{-- liquidations list START --}}
              @foreach ($liquis = $data['user']->provider->liquidations()->paginate(5) as $liquidation)
                Nro de liquidacion : {{$liquidation->nro_liquidacion}} &nbsp; &nbsp; Fecha :  {{$liquidation->created_at}}
                <form class="" action="{{route('liquidation')}}" method="post">
                  @csrf
                  <input type="text" name="id" value="{{$liquidation->id}}" hidden>
                  <input type="submit" name="" value="Items : {{$liquidation->items->count()}}">
                </form>
                <hr>
              @endforeach
              {{$liquis->links()}}
            {{-- liquidations list END  --}}

          </div>

        </div>
      </div>
    </div>
  </div>
@endsection
