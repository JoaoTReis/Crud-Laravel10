@extends('master')

@section('content')

<!-- Aqui está um exemplo de como mostrar os resultados -->
<h1>Resultados da Pesquisa</h1>

@if(isset($query))
    <p>Resultados para: "{{ $query }}"</p>
@endif

@if(isset($users) && count($users) > 0)
    <p>{{ count($users) }} resultado(s) encontrado(s).</p>
    <table class="table">
  <thead>
    <tr>
            <th>Nome</th>
            <th>celular</th>
            <th>E-mail</th>
            <th>Endereço</th>
            <th>Cep</th>
            <th>Rua</th>
            <th>Numero</th>
            <th>Complemento</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>Estado</th>
    </tr>
  </thead>
    
  <tbody>
    
        @foreach($users as $user)
        <tr>
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
                <td><a href="{{ route('users.edit', ['user' => $user->id]) }}">
                        <button type="button">Editar</button>
                    </a>
                </td>
                </tr>
        @endforeach
        </table>
    </body>
@else
    <p>Nenhum resultado encontrado.</p>
@endif


<a href="{{ route('home') }}">
    <button type="button">Página Inicial</button>
</a>

<a href="{{ route('users.create') }}">
    <button type="button">Criar Novo Usuário</button>
</a>




@endsection