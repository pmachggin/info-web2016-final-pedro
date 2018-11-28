<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Temporada;
use Auth;
use App\Horario;

class HorariosController extends Controller{
      function index() {
        $horarios = Horario::all();
        return view('horarios.index', compact('horarios', 'teste'));
    }
        
    function show(Horario $horario) {
        return view('horarios.show', compact('horario'));
    }

    function create(Temporada $temporada) {
        return view('horarios.create', compact('temporada'));
    }

    function store(Request $request, Temporada $temporada) {
        $horario = new Horario;
        $horario->fill($request->all());
        $horario->temporada()->associate($temporada);
        $horario->save();

        return redirect(route('horarios.index'));
    }

    function edit(Horario $horario) {
            return view('horarios.edit', compact('horario'));
    }

    function update(Request $request, Horario $horario) {
            $horario->fill($request->all());
            $horario->save();
    
            return redirect(route('horarios.index'));
    }

    function destroy(Request $request, Horario $horario) {
            $horario->delete();
            return redirect(route('horarios.index'));
    }
}
