@extends('layouts.master')

@section('title', 'Pacientes')

@section('page-header-content', 'Pacientes')

@section('content')

  <div class="row">
    <div class="col-md-3">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Ações</h3>
        </div>
        <div class="panel-body">
          <a href="/pacientes/cria">
            <span class="glyphicon glyphicon-plus"></span> Pacientes
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Email</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach($pacientes as $paciente)
          <tr>
            <td>{{ $paciente->id }}</td>
            <td>{{ $paciente->nome }}</td>
            <td>{{ $paciente->cpf }}</td>
            <td>{{ $paciente->email }}</td>
            <td><a href="/pacientes/edita/{{$paciente->id}}">Editar</a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

@endsection
