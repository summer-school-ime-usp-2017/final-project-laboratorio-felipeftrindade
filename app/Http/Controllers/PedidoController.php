<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pedido;
use App\Exame;
use App\Medico;
use App\Paciente;

class PedidoController extends Controller
{
    //
    public function index(){
      $pedidos = Pedido::all();
      return view('pedido.index', compact('pedidos'));
    }

    public function cria() {
      $medicos = Medico::all();
      $pacientes = Paciente::all();
      $exames = Exame::all();
      return view('pedido.cria',compact('medicos','pacientes','exames'));
    }

    public function show(Pedido $pedido) {
      return view('pedido.show', compact('pedido'));
    }

    public function armazena() {
      $this->validate(request(), [
        'paciente_id' => 'required',
        'medico_id' => 'required',
        'exames' => 'required'
      ]);
      $pedido = new Pedido;
      $pedido->fill(request()->all());
      $pedido->save();
      $pedido->exames()->attach(request()->input('exames'));
      return redirect('/pedidos');
    }
}
