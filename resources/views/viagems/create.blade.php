@extends('layouts.app')

@section('titulo')
 	Nova Viagem
@endsection

@section('conteudo')
	<div class="container">
	 <h1 class="mt-4">Pedindo Viagem</h1>
	 {{ Form::open(['route' => ['Viagems.store', $horario], 'method'=>'PUT']) }}
	 <div class="form-group">
        {{ Form::label('user_id', 'Usuário') }}
        {!! Form::select('user_id', $users, null, ['class' => 'form-control']) !!}
    </div>
	{{ Form::submit('Criar', ['class' => 'btn btn-primary']) }}
	{{ Form::close() }}
	</div>
@endsection