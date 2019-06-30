@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">

          <a href="{{route('home')}}" class="btn btn-primary">Panel Principal</a>
          <div class="card-body">
            @if (session('status'))
              <div class="alert alert-success" role="alert">
                {{ session('status') }}
              </div>
            @endif


            @isset($data['liquidation'])
            <h4>{{$data['liquidation']->title}}</h4>
            <h4>Fecha :  {{$data['liquidation']->created_at}}</h4>
            <h4>Total : {{$data['liquidation']->total}}</h4>
            <h4>Items : </h4>
              @foreach ($liqItems = $data['liquidation']->items()->paginate(15) as $item)
                {{$item}}
              @endforeach
              {{$liqItems->links()}}
            @endisset



          </div>

        </div>
      </div>
    </div>
  </div>
@endsection
