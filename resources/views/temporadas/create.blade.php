@extends('layouts.app')

@section('titulo')
 	Nova Temporada
@endsection

@section('conteudo')
	<div class="container">
	 <h1 class="mt-4">Crie uma nova temporada</h1>
	 {{ Form::open(['route' => 'temporadas.store']) }}
		  <div class="form-group">
	        {{ Form::label('inicio', 'Data de início') }}
	        {{ Form::date('inicio', '', ['class' => 'form-control input', 'required']) }}
	      </div>
	      <div class="form-group">
	        {{ Form::label('fim', 'Fim') }}
	        {{ Form::date('fim', '', ['class' => 'form-control input', 'required']) }}
	      </div>
	      <div class="form-group">
	        {{ Form::label('descricao', 'Descrição') }}
	        {{ Form::text('descricao', '', ['class' => 'form-control input', 'required'])}}
	      </div>
		 	{{ Form::submit('Criar', ['class' => 'btn btn-primary']) }}
	{{ Form::close() }}
	</div>
@endsection