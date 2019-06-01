@extends('layouts.dashboard')

@section('content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h3>Painel de Controle - Produtos</h3>
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
              <th>dirFotoProd</th>
                <th>Código</th>
                <th>Nome</th>
                <th>Descricao</th>
                <th>Tamanho</th>
                <th>Peso</th>
                <th>Categoria</th>
                <th>Inativo</th>
                <th>Ações</th>
            </tr>
        </thead>
        @foreach ($produtos as $key => $produto)
        <tbody>
            <tr>
                <th>
                  <img src="{{ url('storage/'.$produto->dirFotoProd) }}" alt="" style="width: 90px; height:90px;"/>


                </th>
                <th>{{ $produto->id }}</th>
                <td>{{ $produto->nome }}</td>
                <td>{{ $produto->descricao }}</td>
                <td>{{ $produto->tamanho }}</td>
                <td>{{ $produto->peso }}</td>
                <td>{{ $produto->categoria }}</td>
                <td>{{ $produto->deleted_at }}</td>
                <td>
                    <a class="btn btn-success" href="{{ route('produtos.show', $produto->id) }}">Exibir Mais</a>
                    <a class="btn btn-primary" href="{{ route('produtos.edit',$produto->id) }}">Editar</a>
                    <form action="{{ route('produtos.destroy', $produto->id) }}" method="post" style="display: inline-block">
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
