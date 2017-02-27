@extends('layouts.master')

@section('title', 'Pedidos')

@section('page-header-content', 'Pedidos')

@section('content')

  <div class="row">
    <div class="col-md-3">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Ações</h3>
        </div>
        <div class="panel-body">
          <a href="/pedidos/cria">
            <span class="glyphicon glyphicon-plus"></span> Pedidos
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Id</th>
            <th>Médico</th>
            <th>Paciente</th>
          </tr>
        </thead>
        <tbody>
          @foreach($pedidos as $pedido)
          <tr>
            <td>{{ $pedido->id }}</td>
            <td>{{ $pedido->medico->nome }}</td>
            <td>{{ $pedido->paciente->nome }}</td>
            <td><a href="/pedidos/show/{{$pedido->id}}">Ver detalhes</a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

@endsection
