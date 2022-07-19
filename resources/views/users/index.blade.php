@extends('layouts.app', ['activePage' => 'users', 'titlePage' => __('CRUD de Usuários')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">

        @if(session('mensagem'))
            <div class="alert alert-success">
                <p>{{session('mensagem')}}</p>
            </div>
        @endif
        
          <div class="row">
            <div class="col-12 text-left">
                <a href="{{ route('users.create') }}" class="btn btn-info">Criar Usuário</a>
            </div>
          </div>
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Tabela de Usuários</h4>
            <p class="card-category"> Aqui vemos a lista de usuários</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>ID</th>
                  <th>NOME</th>
                  <th>EMAIL</th>

                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <form action="{{ route('users.destroy', $user->id) }}" method="post">
                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">Editar</a>
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Apagar</button>
                                </form>
                            </td>
                        </tr>

                    @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection
