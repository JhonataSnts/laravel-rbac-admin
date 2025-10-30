<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Permissões
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end mb-4">
                <a href="{{ route('permissions.create') }}" class="px-4 py-2 text-white bg-blue-600 rounded hover:bg-blue-700">
                    + Nova Permissão
                </a>
            </div>

            <div class="overflow-hidden bg-white shadow sm:rounded-lg">
                <table class="min-w-full border">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nome</th>
                            <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Ações</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach($permissions as $permission)
                            <tr>
                                <td class="px-6 py-4">{{ $permission->name }}</td>
                                <td class="px-6 py-4 text-right">
                                    <a href="{{ route('permissions.edit', $permission->id) }}" class="px-3 py-1 text-sm text-white bg-indigo-600 rounded hover:bg-indigo-700">Editar</a>
                                    <form action="{{ route('permissions.destroy', $permission->id) }}" method="POST" class="inline">
                                        @csrf @method('DELETE')
                                        <button onclick="return confirm('Deseja remover esta permissão?')" class="px-3 py-1 text-sm text-white bg-red-600 rounded hover:bg-red-700">Excluir</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>