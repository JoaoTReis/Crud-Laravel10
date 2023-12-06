@extends('master')

@section('content')

<h2>Contatos</h2>

<form action="{{ route('users.search') }}" method="GET">
    <input type="text" name="query" placeholder="Digite o nome do usuário">
    <button type="submit">Pesquisar</button>
</form>


<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nome</th>
      <th scope="col">Telefone</th>
      <th scope="col">E-mail</th>
      <th scope="col">Endereço</th>
      <th scope="col">CEP</th>
      <th scope="col">Rua</th>
      <th scope="col">Numero</th>
      <th scope="col">Complemento</th>
      <th scope="col">Bairro</th>
      <th scope="col">Cidade</th>
      <th scope="col">Estado</th>
      <th scope="col">Nota</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($users as $user)
    <tr>
      <th scope="row">{{ $user->id }}</th>
      <td>{{ $user->nome }}</td>
      <td>{{ $user->numero_celular }}</td>
      <td>{{ $user->email }} </td>
      <td>{{ $user->endereco }} </td>
      <td>{{ $user->cep }} </td>
      <td>{{ $user->rua }} </td>
      <td>{{ $user->numero }} </td>
      <td>{{ $user->complemento }} </td>
      <td>{{ $user->bairro }} </td>
      <td>{{ $user->cidade }} </td>
      <td>{{ $user->estado }} </td>
      <td>{{ $user->nota }} </td>
      <td>
        <a href="{{ route('users.edit', ['user' => $user->id]) }}">
          <button type="button">Editar usuário</button>
        </a>
      </td>
      <td>
        <a href="{{ route('users.show', ['user' => $user->id]) }}">
          <button type="button">Mostrar/Excluir Usuário</button>
        </a>
      </td>

    </tr>
    @endforeach
  </tbody>
</table>

<!-- Botão para a página de criação de usuário -->
<a href="{{ route('users.create') }}">
    <button type="button">Criar novo usuário</button>
</a>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif


@endsection
