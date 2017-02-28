<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medico;

class MedicoController extends Controller
{
    //
    public function index(){
      $medicos = Medico::all();
      return view('medico.index', compact('medicos'));
    }

    public function cria() {
      return view('medico.cria');
    }

    public function edita(Medico $medico) {
      return view('medico.edita', compact('medico'));
    }

    public function armazena() {
      $this->validate(request(), [
        'nome' => 'required|min:2|max:195',
        'crm' => 'required',
        'email' => 'required|email'
      ]);
      Medico::create(request()->all());
      request()->session()->flash('alert-success', 'Médico cadastrado com sucesso!');
      return redirect('/medicos');
    }

    public function atualiza(Medico $medico) {
      $this->validate(request(), [
        'nome' => 'required|min:2|max:195',
        'crm' => 'required',
        'email' => 'required|email'
      ]);
      $medico->fill(request()->all());
      $medico->save();
      request()->session()->flash('alert-success', 'Dados atualizados com sucesso!');
      return redirect('/medicos');
    }
}
