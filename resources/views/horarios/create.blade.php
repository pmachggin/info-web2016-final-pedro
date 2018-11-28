@extends('layouts.app')

@section('titulo')
 	Novo Horario
@endsection

@section('conteudo')
	<div class="container">
	 <h1 class="mt-4">Crie um novo horario</h1>
	 {{ Form::open(['route' => ['horarios.store', $temporada], 'method'=>'PUT']) }}
	     <div class="form-group">
	        {{ Form::label('dia', 'Dia da semana') }}
	        {!! Form::select('dia',['Domingo'=>'Domingo','Segunda'=>'Segunda','Terça'=>'Terça','Quarta'=>'Quarta','Quinta'=>'Quinta','Sexta'=>'Sexta','Sabado'=>'Sábado'])!!}
     	 </div>
	      <div class="form-group">
	        {{ Form::label('saida', 'Horário de saida') }}
	        {{ Form::time('saida', '', ['class' => 'form-control input', 'required'])}}
	      </div>
		 	{{ Form::submit('Criar', ['class' => 'btn btn-primary']) }}
	{{ Form::close() }}
	</div>
@endsection