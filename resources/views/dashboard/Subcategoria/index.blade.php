@extends('layouts.dashboard')

@section('content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h3>Painel de Controle - Sub-Categorias</h3>
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
                <th>Categoria-Principal</th>
                <th>Inativo</th>
                <th>Ações</th>
            </tr>
        </thead>
        @foreach ($subcategorias as $key => $subcategoria)
        <tbody>
            <tr>
                <th>{{ $subcategoria->id }}</th>
                <td>{{ $subcategoria->nome }}</td>
                <td>{{ $subcategoria->id_parente }}</td>
                <td>{{ $subcategoria->deleted_at }}</td>
                <td>
                    <a class="btn btn-success" href="{{ route('subcategorias.show', $subcategoria->id) }}">Exibir Mais</a>
                    <a class="btn btn-primary" href="{{ route('subcategorias.edit',$subcategoria->id) }}">Editar</a>
                    <form action="{{ route('subcategorias.destroy', $subcategoria->id) }}" method="post" style="display: inline-block">
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
