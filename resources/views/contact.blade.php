@extends('template.layout')

@section('title', 'contato')

@section('content')


<main class="container w-50 mt-5">

  <div class="modal-dialog" role="document">

    <div class="modal-content" style="background-color: #efefef;">

        <div class="modal-body text-dark">

    <h1 class="mt-3 mb-3">Entre em contato</h1>
    <div class="row">
        <div class="col-md-12">
            <form action="">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" placeholder="Nome">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="mensagem">Mensagem</label>
                    <textarea class="form-control" id="mensagem" rows="3" maxlength="250" style="resize: none"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
</main>

<!--<div class="container w-50 mt-5" style="background-color: #efefef;">
    <div class="row">
        <div class="col-md-12" >
            <h1>Contato</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" placeholder="Nome">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="mensagem">Mensagem</label>
                    <textarea class="form-control" id="mensagem" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>-->
@endsection