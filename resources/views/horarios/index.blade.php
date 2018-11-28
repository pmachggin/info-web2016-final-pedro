@extends('layouts.app')
@section('titulo')
   Horarios
@endsection

@section('conteudo')
  
    <div class="container">
      <div class="container row">

    @foreach($horarios as $horario)
    <!-- Blog Post -->
      <div class="col-md-4">
        <div class="card mb-4">
          <div class="card-header" align="center">
            <h2 class="card-title">{{ $horario->dia }}</h2>
          </div>

          <ul class="list-group list-group-flush" align="center">
            <li class="list-group-item">{{$horario->dia}}</li>
            <li class="list-group-item">{{date('H:i', strtotime($horario->saida))}}</li>
             <li class="list-group-item">{{$horario->temporada->descricao}}</li>
          </ul>

          <div class="card-body" align="center">
              {{ Form::open(['route' => ['viagems.store', $horario->id], 'method'=>'PUT', 'class'=>'d-inline-block']) }}
                {{ Form::submit('Entrar', ['class' => 'btn btn-danger btn-sm']) }}
              {{ Form::close() }}

              @if(Auth::user()->admin==1)
              {{link_to_route('horarios.edit', 'Editar', [$horario->id], ['class' => 'btn btn-danger btn-sm'])}}
              {{ Form::open(['route' => ['horarios.destroy', $horario->id], 'method'=>'DELETE', 'class'=>'d-inline-block']) }}
                {{ Form::submit('Excluir', ['class' => 'btn btn-danger btn-sm']) }}
              {{ Form::close() }}
            @endif
          </div>
        </div>
      </div>
       

    @endforeach
      </div>
    </div>

@endsection