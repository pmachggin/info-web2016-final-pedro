<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Temporada;


class TemporadasController extends Controller{
    function index() {
        $temporadas = Temporada::all();
        return view('temporadas.index', compact('temporadas', 'teste'));
    }
        
    function show(Temporada $temporada) {
        return view('temporadas.show', compact('temporada'));
    }

    function create() {
        return view('temporadas.create');
    }

    function store(Request $request) {
        $temporada = new Temporada;
        $temporada->fill($request->all());
        $temporada->save();

        return redirect(route('temporadas.show', $temporada->id));
    }

    function edit(Temporada $temporada) {
            return view('temporadas.edit', compact('temporada'));
    }

    function update(Request $request, Temporada $temporada) {
            $temporada->fill($request->all());
            $temporada->save();
            return redirect(route('temporadas.show', $temporada->id));
    }

    function destroy(Request $request, Temporada $temporada) {
        $temporada->delete();
        return redirect(route('temporadas.index'));
    }
}
