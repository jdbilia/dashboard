@extends('layouts.app', ['activePage' => 'posts', 'titlePage' => __('Criar Post')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('posts.store') }}" autocomplete="off" class="form-horizontal">
            @csrf
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Criar Post') }}</h4>
              </div>
              <div class="card-body ">
                @if (session('status'))
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="material-icons">close</i>
                        </button>
                        <span>{{ session('status') }}</span>
                      </div>
                    </div>
                  </div>
                @endif
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Título') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('titulo') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('titulo') ? ' is-invalid' : '' }}" name="titulo" id="input-titulo" type="text" placeholder="{{ __('Título') }}" value="{{ old('titulo') }}" required="true" aria-required="true"/>
                      @if ($errors->has('titulo'))
                        <span id="titulo-error" class="error text-danger" for="input-titulo">{{ $errors->first('titulo') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Conteúdo') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('conteudo') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('conteudo') ? ' is-invalid' : '' }}" name="conteudo" id="input-conteudo" type="text" placeholder="{{ __('Conteúdo') }}" value="{{ old('conteudo') }}" required />
                      @if ($errors->has('conteudo'))
                        <span id="conteudo-error" class="error text-danger" for="input-conteudo">{{ $errors->first('conteudo') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Salvar') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
