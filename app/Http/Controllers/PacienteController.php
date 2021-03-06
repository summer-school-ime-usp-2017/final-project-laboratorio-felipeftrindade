<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paciente;

class PacienteController extends Controller
{
    //
    public function index(){
      $pacientes = Paciente::all();
      return view('paciente.index', compact('pacientes'));
    }

    public function cria() {
      return view('paciente.cria');
    }

    public function edita(Paciente $paciente) {
      return view('paciente.edita', compact('paciente'));
    }

    public function armazena() {
      $this->validate(request(), [
        'nome' => 'required|min:2|max:195',
        'cpf' => 'required|numeric|min:11|max:11',
        'email' => 'required|email'
      ]);
      Paciente::create(request()->all());
      request()->session()->flash('alert-success', 'Paciente cadastrado com sucesso!');
      return redirect('/pacientes');
    }

    public function atualiza(Paciente $paciente) {
      $this->validate(request(), [
        'nome' => 'required|min:2|max:195',
        'cpf' => 'required|numeric|min:11|max:11',
        'email' => 'required|email'
      ]);
      $paciente->fill(request()->all());
      $paciente->save();
      request()->session()->flash('alert-success', 'Dados atualizados com sucesso!');
      return redirect('/pacientes');
    }
}
