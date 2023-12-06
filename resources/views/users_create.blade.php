@extends('master')

@section('content')

<form action="{{ route('users.store') }}" method="POST">
    @csrf 

    <div>
    <label for="nome">Nome:</label>
    <input type="text" name="nome" placeholder="nome" required>
    </div>

    <div>
    <label for="celular">Número celular:</label>
    <input type="text" id="celular" name="celular" required>
    </div>

    <div>
    <label for="email">E-mail:</label>
    <input type="email" id="email" name="email">
    </div>

    <fieldset>
        <legend>Endereço</legend>

        <div>
        <label for="rua">Rua:</label>
        <input type="text" id="rua" name="rua">
    </div>

    <div>
        <label for="numero">Número:</label>
        <input type="text" id="numero" name="numero">
    </div>

    <div>
        <label for="complemento">Complemento:</label>
        <input type="text" id="complemento" name="complemento">
    </div>

    <div>
        <label for="bairro">Bairro:</label>
        <input type="text" id="bairro" name="bairro">
    </div>

    <div>
        <label for="cidade">Cidade:</label>
        <input type="text" id="cidade" name="cidade">
    </div>

    <div>
        <label for="estado">Estado:</label>
        <input type="text" id="estado" name="estado">
    </div>

    <div>
        <label for="nota">Nota:</label>
        <textarea id="nota" name="nota" placeholder="Digite sua nota aqui"></textarea>
    </div>
    </fieldset>

    

    <button type="submit">Criar Contato</button>
</form>




@endsection
