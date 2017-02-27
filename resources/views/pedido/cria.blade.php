@extends('layouts.master')

@section('title', 'Cadastro de pedidos')

@section('page-header-content', 'Cadastro de Pedidos')

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
      @if(count($errors) > 0)
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $message)
              <li>{{ $message }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      <form action="/pedidos" method="POST">
        {{csrf_field()}}
        <div class="form-group">
          <label for="medico_id">Médico</label>
          <select name="medico_id" id="medico_id" class="form-control">
            @foreach ($medicos as $medico)
              <option value="{{$medico->id}}">{{$medico->nome}}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="paciente_id">Paciente</label>
          <select name="paciente_id" id="paciente_id" class="form-control">
            @foreach ($pacientes as $paciente)
              <option value="{{$paciente->id}}">{{$paciente->nome}}</option>
            @endforeach
          </select>
        </div>
        @foreach ($exames as $exame)
          <div class="form-group">
            <label for="exame_{{$exame->id}}">{{$exame->nome}}</label>
            <input name="exames[]" id="exame_{{$exame->id}}" value="{{$exame->id}}" type="checkbox" class="form-control">
          </div>
        @endforeach
        <button class="btn btn-primary">Salvar</button>
      </form>
    </div>
  </div>
@endsection
