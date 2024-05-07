@extends('layouts.app')

@section('title')
    <title>home</title>
@endsection

@section('css')

@endsection

@section('body')
<div class="container text">
    <div class="row">
      <div class="col">
        
      </div>
      <div class="col">
        {{-- <p><strong>Estou na pagina de Contatos</strong></p> --}}
<form action="{{route('contato.submit') }}" method="post" class="mt-4 mb-4">
    @csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="mt-5">Email </label>
        <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nome </label>
        <input type="text" name="nome" class="form-control" id="exampleFormControlInput1" placeholder="Nome">
      </div>
      
      <div class="mb-3">
        <label class="form-label">Assunto</label>
        <select name="subject" class="form-control">
            <option value="">Selecione uma opção</option>
            <option value="vendas">Vendas</option>
            <option value="entregas">Entregas</option>
            <option value="s & r">Sugestões e Reclamações</option>
        </select>
      </div>
      
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Campo de Texto</label>
        <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
</form>

      </div>
      <div class="col">
      </div>
    </div>
  </div>
@endsection

    
