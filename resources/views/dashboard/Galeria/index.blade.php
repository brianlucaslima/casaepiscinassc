@extends('layouts.dashboard')

@section('content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h3>Painel de Controle - Galeria</h3>
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
            <th>dirFotoGaleria</th>
            <th>id</th>
              <th>Titulo</th>
              <th>Cliente</th>
              <th>Cidade</th>
              <th>Data</th>
              <th>Ações</th>
          </tr>
      </thead>
      @foreach ($galerias as $key => $galeria)
      <tbody>
          <tr>
              <th>
                <img src="{{ url('storage/'.$galeria->dirFotoGaleria) }}" alt="" style="width: 90px; height:90px;"/>


              </th>
              <th>{{ $galeria->id }}</th>
              <td>{{ $galeria->titulo }}</td>
              <td>{{ $galeria->cliente }}</td>
              <td>{{ $galeria->cidade }}</td>
              <td>{{ $galeria->created_at }}</td>
              <td>
                  <a class="btn btn-success" href="{{ route('galerias.show', $galeria->id) }}">Exibir Mais</a>
                  <a class="btn btn-primary" href="{{ route('galerias.edit',$galeria->id) }}">Editar</a>
                  <form action="{{ route('galerias.destroy', $galeria->id) }}" method="post" style="display: inline-block">
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
