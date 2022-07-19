@extends('layouts.app', ['activePage' => 'posts', 'titlePage' => __('CRUD de Posts')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
          <div class="row">
              <div class="col-12 text-left">
                <a href="{{ route('posts.create') }}" class="btn btn-info">Criar Post</a>
              </div>
          </div>
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Tabela Simples</h4>
            <p class="card-category"> Aqui vemos a list de posts</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    ID
                  </th>
                  <th>
                    TITULO
                  </th>
                  <th>
                    CONTEUDO
                  </th>
                  <th>
                    AÇÕES
                  </th>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{$post->id}}</td>
                            <td>{{$post->titulo}}</td>
                            <td>{{$post->conteudo}}</td>
                            <td>
                                <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Editar</a>
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
