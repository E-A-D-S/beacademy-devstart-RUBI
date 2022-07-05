@extends('template.layout')
@section('title', 'Entre com sua conta')

@section('content')
<main class="container w-50 mt-5">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="background-color: #efefef;">
        <div class="modal-body text-dark">
        <form active="" method="post" class="pl-4 pr-4">
            @csrf
            <h1 class="mb-3">Login</h1>
            <div class="form-group">
                <label>Email</label>
                <input type="Email" class="form-control" placeholder="Digite seu email">
            </div>
            <div class="form-group mt-3">
                <label>Senha</label>
                    <a href="#" class="float-right">
                        <i class="fa fa-eye"></i>
                    </a>
                <input type="password" class="form-control" placeholder="Digite sua senha">
            </div>
            <button type="submit" class="btn btn-primary btn-block mt-3" >Entrar</button>
            <div class="row mt-3">
                <div class="col">
                    <input type="checkbox" name="remember" id="remember"/>
                    <label for="remember">Lembrar-me</label>
                </div>
                <div class="col">
                        <a href="#">Esqueci minha senha</a>
                </div>
            </div>
            <div class="text-center mt-4 mb-1">
                <span>Não possui cadastro? </span>&nbsp;
                <a href="{{ route('users.create') }}">Cadastre-se aqui</a>
            </div>
        </form>
        </div>
      </div>
    </div>
</main
@endsection
