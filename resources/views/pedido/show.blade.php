@extends('layouts.master')

@section('title', 'Detalhes do pedido')

@section('page-header-content', "Detalhes do pedido:")

@section('content')

  <div class="row">
    <div class="col-md-3">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Ações</h3>
        </div>
        <div class="panel-body">
          <a href="/pedidos">
            <span class="glyphicon glyphicon-th-list"></span> Pedidos
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-6">
        <div class="col-md-12">Médico: {{$pedido->medico->nome}}</div>
        <div class="col-md-12">Paciente: {{$pedido->paciente->nome}}</div>
        <div class="col-md-12">Exames solicitados:</div>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Nome</th>
              <th>Metodo</th>
            </tr>
          </thead>
          <tbody>
             @foreach($pedido->exames as $exame)
            <tr>
              <td>{{ $exame->nome }}</td>
              <td>{{ $exame->metodo }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
    </div>
  </div>
@endsection
