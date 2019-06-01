@extends('layouts.dashboard')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Cadastrar Servico</h1>
</div>
<!-- É daqui pra frente -->
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error}}</li>
            @endforeach
        </ul>
    </div>
@endif



<form method="POST" action="{{ action('ServicoController@store') }}" enctype="multipart/form-data">
    @csrf
    <div class="form-group col-md-5">


    <label for="id" style="display:none">ID:</label>
    <input type="text" class="form-control" name="id" readonly hidden>

    <label for="nome">Nome</label>
    <input type="text" class="form-control" name="nome">

    <label for="descricao">Descrição</label>
    <textarea rows = "5" cols = "54" class="form-control" name="descricao"></textarea>

    <label for="dirFotoServ">Foto do Serviço</label>
    <input type="file" class="form-control-file" name="dirFotoServ">


    <div class="col-md-12 text-right">
        <br>
        <button type="submit" class="btn btn-success">Cadastrar</button>
        <a class="btn btn-primary" href="{{ url('/dashboard') }}">Cancelar</a>
    </div>
  </div>
</form>
@endsection
