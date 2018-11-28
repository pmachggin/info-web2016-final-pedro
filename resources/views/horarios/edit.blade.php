@extends('layouts.app')

@section('titulo')
 	Editando horario
@endsection

@section('conteudo')
	<div class="container">
	 <h1 class="mt-4">Editando horario</h1>
	  {{ Form::open(['route' => ['horarios.edit', $horario->id], 'method' => 'PUT']) }}
	     <div class="form-group">
	        {{ Form::label('dia', 'Dia da semana') }}
	        {!! Form::select('dia',['Domingo'=>'Domingo','Segunda'=>'Segunda','Terça'=>'Terça','Quarta'=>'Quarta','Quinta'=>'Quinta','Sexta'=>'Sexta','Sabado'=>'Sábado'])!!}
     	 </div>
	      <div class="form-group">
	        {{ Form::label('saida', 'Horário de saida') }}
	        {{ Form::time('saida', '', ['class' => 'form-control input', 'required'])}}
	      </div>
		 	{{ Form::submit('Editar', ['class' => 'btn btn-primary']) }}
	{{ Form::close() }}
	</div>
@endsection