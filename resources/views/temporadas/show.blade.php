@extends('layouts.app')

@section('titulo')
 	 Temporada - {{$temporada->descricao}}
@endsection

@section('conteudo')

	<div class="container">
    @if(Auth::user()->admin==1)
    {{link_to_route('temporadas.edit', 'Editar', [$temporada->id], ['class' => 'btn btn-danger btn-sm'])}}
    {{link_to_route('horarios.create', 'Adicionar Horario', [$temporada], ['class' => 'btn btn-danger btn-sm'])}}
    {{ Form::open(['route' => ['temporadas.destroy', $temporada->id], 'method'=>'DELETE', 'class'=>'d-inline-block']) }}
      {{ Form::submit('Excluir', ['class' => 'btn btn-danger btn-sm']) }}
    {{ Form::close() }}
  @endif
	 <h1 class="mt-4">{{$temporada->descricao}}</h1>
	 @foreach($temporada->horarios as $horario)
      <!-- Blog Post -->
      <div class="col-md-4">
        <div class="card mb-4">
          <div class="card-body" align="center">
             <h2 class="card-title">{{$horario->dia}}</h2>
          </div>
          <ul class="list-group list-group-flush" align="center">   
            <li class="list-group-item">Horario de Saída {{date('H:i', strtotime($horario->saida))}}</li>
          </ul>
          <div class="card-footer" align="center">
            {{link_to_route('horarios.show', 'Ver', '', ['class'=>'btn btn-sm btn-primary'])}}

            @if(Auth::user()==$horario->user)
              {{link_to_route('horarios.edit', 'Editar', [$horario->id], ['class'=>'btn btn-info btn-sm'])}}
              
              {{ Form::open(['route' => ['horarios.destroy', $horario->id], 'method'=>'DELETE', 'class'=>'d-inline-block']) }}
                {{ Form::submit('Excluir', ['class' => 'btn btn-danger btn-sm']) }}
              {{ Form::close() }}
            @endif
          </div>
        </div>
      </div>
    @endforeach
	{{ Form::close() }}
	</div>
@endsection