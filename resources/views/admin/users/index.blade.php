@extends('layouts.admin')

@section('title', 'Usuários')

@section('content')
<div class="flex justify-between items-center mb-4">
    <h2 class="text-2xl font-bold">Lista de Usuários</h2>
    <a href="{{ route('users.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
        + Novo Usuário
    </a>
</div>

<table class="min-w-full bg-white shadow rounded">
    <thead>
        <tr class="bg-gray-200 text-left">
            <th class="p-2">ID</th>
            <th class="p-2">Nome</th>
            <th class="p-2">Email</th>
            <th class="p-2">Papéis</th>
            <th class="p-2 text-center">Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
            <tr class="border-b hover:bg-gray-50">
                <td class="p-2">{{ $user->id }}</td>
                <td class="p-2">{{ $user->name }}</td>
                <td class="p-2">{{ $user->email }}</td>
                <td class="p-2">{{ $user->getRoleNames()->join(', ') }}</td>
                <td class="p-2 text-center">
                    <a href="{{ route('users.edit', $user) }}" class="text-blue-500 hover:underline">Editar</a>
                    <form action="{{ route('users.destroy', $user) }}" method="POST" class="inline">
                        @csrf @method('DELETE')
                        <button class="text-red-500 hover:underline" onclick="return confirm('Excluir este usuário?')">Excluir</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<div class="mt-4">
    {{ $users->links() }}
</div>
@endsection