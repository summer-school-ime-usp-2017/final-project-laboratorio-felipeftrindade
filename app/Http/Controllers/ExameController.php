<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exame;

class ExameController extends Controller
{
    //
    public function index(){
      $exames = Exame::all();
      return view('exame.index', compact('exames'));
    }

    public function cria() {
      return view('exame.cria');
    }

    public function edita(Exame $exame) {
      return view('exame.edita', compact('exame'));
    }

    public function armazena() {
      $this->validate(request(), [
        'nome' => 'required|min:2|max:195',
        'metodo' => 'required|min:2|max:195',
      ]);
      Exame::create(request()->all());
      request()->session()->flash('alert-success', 'Exame cadastrado com sucesso!');
      return redirect('/exames');
    }

    public function atualiza(Exame $exame) {
      $this->validate(request(), [
        'nome' => 'required|min:2|max:195',
        'metodo' => 'required|min:2|max:195',
      ]);
      $exame->fill(request()->all());
      $exame->save();
      request()->session()->flash('alert-success', 'Dados atualizado com sucesso!');
      return redirect('/exames');
    }
}
