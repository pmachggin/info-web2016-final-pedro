<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Horario;
use App\Viagem;

class ViagemsController extends Controller{
     function index() {
        $viagems = Viagem::all();
        return view('viagems.index', compact('viagems', ''));
    }
        
    function show(Viagem $viagem) {
        return view('viagems.show', compact('viagem'));
    }

    function create(Horario $horario) {
        $users = User::pluck('name', 'id');
        return view('viagems.create', compact('horario', 'users'));
    }

    function store(Horario $horario, Request $request) {
        $viagem = new Viagem;
        $viagem->fill($request->all());
        $viagem->horario()->associate($horario);
        $viagem->user()->associate(Auth::user());
        $viagem->save();

        return redirect(route('viagems.index', ''));
    }

    function destroy(Request $request, Viagem $viagem) {
        $viagem->delete();
        return redirect(route('horarios.index', ''));
    }
}
