@extends('master')

@section('content')

<h1 class="text-center">Dados do Usuario</h1>

    <div>
        <label for="nome">Nome</label>
        <input type="text"name="nome" value="{{$users->nome}}">
    </div>

    <div>
        <label for="telefone">Telefone</label>
        <input type="text" name="numero_celular" value="{{$users->numero_celular}}">
    </div>

    <div>
        <label for="email">E-mail</label>
        <input type="text"name="email" value="{{$users->email}}">
    </div>
    <!--endereco-->
    <fieldset>
        <legend for="">Endereço</legend>
    
        <div>
            <label for="cep">CEP</label>
            <input type="text"name="Cep" value="{{$users->cep}}">
        </div>

        <div>
            <label for="rua">Rua</label>
            <input type="text"name="rua" value="{{$users->rua}}">
        </div>

        <div>
            <label for="numero">Numero</label>
            <input type="text"name="numero" value="{{$users->numero}}">
        </div>

        <div>
            <label for="complemento">Complemento</label>
            <input type="text"name="complemento" value="{{$users->complemento}}">
        </div>

        <div>
            <label for="bairro">Bairro</label>
            <input type="text"name="bairro" value="{{$users->bairro}}">
        </div>

        <div>
            <label for="cidade">Cidade</label>
            <input type="text"name="cidade" value="{{$users->cidade}}">
        </div>
        <div>
            <label for="estado">Estado</label>
            <input type="text"name="estado" value="{{$users->estado}}">
        </div>
    </fieldset>
    <div style="padding-bottom: 20px;">
    <a href="{{ route('users.index') }}">
        <button type="button">Ir para a lista de usuários</button>
    </a>
    </div>

    <form action="{{ route('users.destroy',['user'=>$users->id]) }}" method="post">
            @csrf

            <input type="hidden" name="_method" value="DELETE">
            <button type="submit">Deletar este Usuario</button>
            
        </form>
@endsection