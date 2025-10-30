<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Painel do Usuário
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h1 class="text-2xl font-bold mb-2">Bem-vindo, {{ auth()->user()->name }} 👋</h1>
                <p class="text-gray-500 dark:text-gray-400">
                    Você está logado como 
                    <span class="font-semibold">{{ auth()->user()->getRoleNames()->implode(', ') ?: 'usuário comum' }}</span>
                </p>
            </div>

            <div class="mt-8 grid grid-cols-1 sm:grid-cols-3 gap-6">
                <div class="bg-blue-100 dark:bg-blue-900 p-6 rounded-2xl shadow-md">
                    <h3 class="text-lg font-semibold mb-2 text-blue-800 dark:text-blue-200">Usuários</h3>
                    <p class="text-4xl font-bold text-blue-700 dark:text-blue-100">{{ $usersCount }}</p>
                </div>

                <div class="bg-green-100 dark:bg-green-900 p-6 rounded-2xl shadow-md">
                    <h3 class="text-lg font-semibold mb-2 text-green-800 dark:text-green-200">Funções (Roles)</h3>
                    <p class="text-4xl font-bold text-green-700 dark:text-green-100">{{ $rolesCount }}</p>
                </div>

                <div class="bg-purple-100 dark:bg-purple-900 p-6 rounded-2xl shadow-md">
                    <h3 class="text-lg font-semibold mb-2 text-purple-800 dark:text-purple-200">Permissões</h3>
                    <p class="text-4xl font-bold text-purple-700 dark:text-purple-100">{{ $permissionsCount }}</p>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>