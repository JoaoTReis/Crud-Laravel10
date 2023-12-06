@extends('master')

@section('content')

<h1 class="text-center">Agenda</h1>

<a href="{{ route('users.index') }}">
    <button type="button">Ir para a lista de usuários</button>
</a>

@endsection
