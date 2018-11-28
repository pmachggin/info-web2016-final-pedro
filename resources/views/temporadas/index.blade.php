@extends('layouts.app')
@section('titulo')
 	 Temporadas
@endsection


@section('conteudo')
     @guest
      @else
          @if(Auth::user()->admin==1)
            {{link_to_route('temporadas.create', 'Criar nova','', ['class'=>'btn btn-info btn-sm'])}}
      @endif
     @endguest


     <div class="container">
      <div class="container row">

    @foreach($temporadas as $temporada)
    <!-- Blog Post -->

    
      
     
      <div class="col-md-4">
        <div class="card mb-4">
          <div class="card-header" align="center">
            <h2 class="card-title">{{ $temporada->descricao }}</h2>
          </div>

          <ul class="list-group list-group-flush" align="center">
            <li class="list-group-item">{{date('d-m-Y', strtotime($temporada->inicio))}}</li>
            <li class="list-group-item">{{date('d-m-Y', strtotime($temporada->fim))}}</li>
          </ul>

          <div class="card-body" align="center">
            {{link_to_route('temporadas.show', 'Visualizar', [$temporada->id], ['class'=>'btn btn-info btn-sm'])}}
            @guest
            @else
              @if(Auth::user()->admin==1)
                {{link_to_route('temporadas.edit', 'Editar', [$temporada->id], ['class'=>'btn btn-info btn-sm'])}}
                {{ Form::open(['route' => ['temporadas.destroy', $temporada->id], 'method'=>'DELETE', 'class'=>'d-inline-block']) }}
                  {{ Form::submit('Excluir', ['class'=>'btn btn-info btn-sm']) }}
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