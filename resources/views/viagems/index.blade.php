@extends('layouts.app')
@section('titulo')
   Viagems
@endsection

@section('conteudo')

<div class="container">
  <div class="container row">
    @foreach($viagems as $viagem)
    <!-- Blog Post -->
      <div class="col-md-4">
        <div class="card mb-4">
          <div class="card-header" align="center">
            <h2 class="card-title">Pedido de Viagem-{{ $viagem->id }}</h2>
          </div>

          <ul class="list-group list-group-flush" align="center">
            <li class="list-group-item">{{$viagem->user->name}}</li>
            <li class="list-group-item">{{$viagem->horario->dia}}</li>
            <li class="list-group-item">{{date('H:i', strtotime($viagem->horario->saida))}}</li>
          </ul>

          <div class="card-body" align="center">
             @guest
            @else
              @if($viagem->user_id==Auth::user()->id)
            {{ Form::open(['route' => ['viagems.destroy', $viagem->id], 'method'=>'DELETE', 'class'=>'d-inline-block']) }}
                {{ Form::submit('Sair', ['class' => 'btn btn-danger btn-sm']) }}
              {{ Form::close() }}
                @endif
               @endguest
          </div>
        </div>
      </div>

    @endforeach
    </div>
      </div>

@endsection