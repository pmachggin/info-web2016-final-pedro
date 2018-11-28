@extends('layouts.app')

@section('titulo')
 	Atualizar Temporada
@endsection

@section('conteudo')
	<div class="container">
	 <h1 class="mt-4">Atualizar Temporada</h1>
	 {{ Form::open(['route' => ['temporadas.edit', $temporada->id], 'method' => 'PUT']) }}
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
	 	{{ Form::submit('Atualizar', ['class' => 'btn btn-primary']) }}
	{{ Form::close() }}
	</div>
@endsection