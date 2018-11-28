@extends('layouts.app')

@section('titulo')
 	 Viagem
@endsection

@section('conteudo')

	<div class="container">
	 <h1 class="mt-4">{{$viagem->id}}</h1>
	 @foreach($viagem->horario as $horario)
      <!-- Blog Post -->
      <div class="col-md-4">
        <div class="card mb-4">
          <div class="card-body" align="center">
          </div>
          <ul class="list-group list-group-flush" align="center">
            <li class="list-group-item">{{$viagem->horario->dia}}-feira</li>          
            <li class="list-group-item">Horario de Saída {{date('H:i', strtotime($viagem->horario->saida))}}</li>
          </ul>
          <div class="card-footer" align="center">

             @if($Viagem->user_id==Auth::user()->id)
              {{ Form::open(['route' => ['viagems.destroy', $Viagem->horario->id], 'method'=>'DELETE', 'class'=>'d-inline-block']) }}
                {{ Form::submit('Sair', ['class' => 'btn btn-danger btn-sm']) }}
              {{ Form::close() }}
            @else
              {{ Form::open(['route' => ['viagems.store', $viagem->horario->id], 'method'=>'PUT', 'class'=>'d-inline-block']) }}
                {{ Form::submit('Entrar', ['class' => 'btn btn-danger btn-sm']) }}
              {{ Form::close() }}
          @endif

            @if(Auth::user()==$Viagem->horario->user)
              {{link_to_route('horarios.edit', 'Editar', [$viagem->horario->id], ['class'=>'btn btn-info btn-sm'])}}
              
              {{ Form::open(['route' => ['horarios.destroy', $viagem->horario->id], 'method'=>'DELETE', 'class'=>'d-inline-block']) }}
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