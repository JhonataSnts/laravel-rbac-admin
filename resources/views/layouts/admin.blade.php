<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Painel Admin')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans antialiased">

    <!-- Header -->
    <header class="bg-blue-700 text-white p-4 shadow">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-lg font-bold">Painel Administrativo</h1>
            <div>
                <span>{{ auth()->user()->name ?? 'Visitante' }}</span>
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="ml-2 text-red-200 hover:text-red-100">Sair</button>
                </form>
            </div>
        </div>
    </header>

    <div class="flex min-h-[calc(100vh-64px)]">
        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow-lg rounded p-4 sticky top-4 h-[calc(100vh-1rem)]">
            <h2 class="text-xl font-bold mb-6 text-gray-800">Painel Administrativo</h2>
            <ul class="space-y-2">
                <li>
                    <a href="{{ url('/admin') }}"
                       class="block px-3 py-2 rounded hover:bg-blue-100 {{ request()->is('admin') ? 'bg-blue-200 font-semibold' : '' }}">
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{ route('users.index') }}"
                       class="block px-3 py-2 rounded hover:bg-blue-100 {{ request()->is('admin/users*') ? 'bg-blue-200 font-semibold' : '' }}">
                        Usuários
                    </a>
                </li>
                <li>
                    <a href="{{ route('roles.index') }}"
                       class="block px-3 py-2 rounded hover:bg-blue-100 {{ request()->is('admin/roles*') ? 'bg-blue-200 font-semibold' : '' }}">
                        Papéis
                    </a>
                </li>
                <li>
                    <a href="{{ route('permissions.index') }}"
                       class="block px-3 py-2 rounded hover:bg-blue-100 {{ request()->is('admin/permissions*') ? 'bg-blue-200 font-semibold' : '' }}">
                        Permissões
                    </a>
                </li>
            </ul>
        </aside>

        <!-- Conteúdo principal -->
        <main class="flex-1 p-6">
            @yield('content')
        </main>
    </div>

</body>
</html>