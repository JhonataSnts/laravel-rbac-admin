<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Editar Permissão
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 shadow sm:rounded-lg">
                <form method="POST" action="{{ route('permissions.update', $permission->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label class="block text-gray-700">Nome da Permissão</label>
                        <input type="text" name="name" value="{{ old('name', $permission->name) }}" class="w-full mt-1 rounded border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        @error('name') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div class="flex justify-end">
                        <a href="{{ route('permissions.index') }}" class="px-4 py-2 text-gray-700 bg-gray-200 rounded hover:bg-gray-300">Cancelar</a>
                        <button type="submit" class="ml-3 px-4 py-2 text-white bg-blue-600 rounded hover:bg-blue-700">Atualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>