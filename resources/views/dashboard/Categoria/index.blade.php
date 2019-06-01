@extends('layouts.dashboard')

@section('content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h3>Painel de Controle - Categorias</h3>
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

  <table class="table table-bordered">


        <thead class="text-center">
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Inativo</th>
                <th>Ações</th>
            </tr>
        </thead>
        @foreach ($categorias as $key => $categoria)
        <tbody>
            <tr>
                <th>{{ $categoria->id }}</th>
                <td>{{ $categoria->nome }}</td>
                <td>{{ $categoria->deleted_at }}</td>
                <td>
                    <a class="btn btn-success" href="{{ route('categorias.show', $categoria->id) }}">Exibir Mais</a>
                    <a class="btn btn-primary" href="{{ route('categorias.edit',$categoria->id) }}">Editar</a>
                    <form action="{{ route('categorias.destroy', $categoria->id) }}" method="post" style="display: inline-block">
                      @csrf
                      <input type="hidden" name="_method" value="DELETE">

                      <button type="submit" class="btn btn-danger" onclick="excluir_registro( event );">Inativar</button>

                    </form>
                </td>
            </tr>
        </tbody>
        @endforeach
        </table>
    <div style="height: 50px;"></div>
    <a class="btn btn-primary" href="{{ url('dashboard') }}">Voltar</a>
    </div>




@endsection
