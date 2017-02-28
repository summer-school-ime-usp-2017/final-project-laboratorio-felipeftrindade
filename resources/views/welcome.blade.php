@extends('layouts.master')

@section('title', 'Inicio')

@section('page-header-content', 'Projeto Laboratório')

@section('content')

  <div class="row">
    <div class="col-md-12">
      <h4>Fluxos:</h4>
      <div class="col-md-6">
        <div class="panel panel-info">
          <div class="panel-heading">Exames</div>
          <div class="panel-body">
            <ul class="list-group">
              <li class="list-group-item">Visualizar a lista de exames cadastrados.</li>
              <li class="list-group-item">Cadastrar um novo exame.</li>
              <li class="list-group-item">Editar um exame cadastrado.</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="panel panel-info">
          <div class="panel-heading">Médicos</div>
          <div class="panel-body">
            <ul class="list-group">
              <li class="list-group-item">Visualizar a lista de médicos cadastrados.</li>
              <li class="list-group-item">Cadastrar um novo médico.</li>
              <li class="list-group-item">Editar um médico cadastrado.</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="panel panel-info">
          <div class="panel-heading">Pacientes</div>
          <div class="panel-body">
            <ul class="list-group">
              <li class="list-group-item">Visualizar a lista de pacientes cadastrados.</li>
              <li class="list-group-item">Cadastrar um novo paciente.</li>
              <li class="list-group-item">Editar um paciente cadastrado.</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="panel panel-info">
          <div class="panel-heading">Pedidos</div>
          <div class="panel-body">
            <ul class="list-group">
              <li class="list-group-item">Visualizar a lista de pedidos cadastrados.</li>
              <li class="list-group-item">Cadastrar um novo pedido.</li>
              <li class="list-group-item">Consultar detalhes de um pedido cadastrado.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
