@extends('layouts.admin')

@section('title', 'Criar Usuário')

@section('content')
    <h2 class="text-2xl font-bold mb-4">Criar Usuário</h2>

    <form method="POST" action="{{ route('users.store') }}" class="bg-white shadow-md rounded p-4">
        @csrf
        <div class="mb-4">
            <label for="name" class="block mb-1 font-semibold">Nome</label>
            <input type="text" name="name" id="name" class="border p-2 w-full rounded" required>
        </div>

        <div class="mb-4">
            <label for="email" class="block mb-1 font-semibold">Email</label>
            <input type="email" name="email" id="email" class="border p-2 w-full rounded" required>
        </div>

        <div class="mb-4">
            <label for="password" class="block mb-1 font-semibold">Senha</label>
            <input type="password" name="password" id="password" class="border p-2 w-full rounded" required>
        </div>

        <div class="mb-4">
            <label for="roles" class="block mb-1 font-semibold">Papéis</label>
            <select name="roles[]" id="roles" multiple class="border p-2 w-full rounded">
                @foreach($roles as $role)
                    <option value="{{ $role->name }}">{{ $role->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Salvar</button>
    </form>
@endsection