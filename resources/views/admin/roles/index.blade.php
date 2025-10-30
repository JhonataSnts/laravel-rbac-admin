<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Perfis de Acesso (Roles)
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end mb-4">
                <a href="{{ route('roles.create') }}" class="px-4 py-2 text-white bg-blue-600 rounded hover:bg-blue-700">
                    + Nova Role
                </a>
            </div>

            <div class="overflow-hidden bg-white shadow-md sm:rounded-lg">
                <table class="min-w-full border">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nome</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Permissões</th>
                            <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Ações</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($roles as $role)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $role->name }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @foreach($role->permissions as $permission)
                                        <span class="inline-block px-2 py-1 text-xs text-white bg-gray-600 rounded">{{ $permission->name }}</span>
                                    @endforeach
                                </td>
                                <td class="px-6 py-4 text-right whitespace-nowrap">
                                    <a href="{{ route('roles.edit', $role->id) }}" class="px-3 py-1 text-sm text-white bg-indigo-600 rounded hover:bg-indigo-700">Editar</a>
                                    <form action="{{ route('roles.destroy', $role->id) }}" method="POST" class="inline">
                                        @csrf @method('DELETE')
                                        <button onclick="return confirm('Deseja remover esta role?')" class="px-3 py-1 text-sm text-white bg-red-600 rounded hover:bg-red-700">
                                            Excluir
                                        </button>
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