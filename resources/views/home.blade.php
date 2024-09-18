<!-- resources/views/tasks/index.blade.php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Página de Tarefas</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <header class="flex justify-between items-center p-6 bg-white shadow-md">
        <h1 class="text-lg font-semibold text-gray-800">Olá, </h1>
        <form method="POST" action="">

            <button type="submit" class="px-4 py-2 bg-red-600 text-white font-semibold rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
                Logout
            </button>
        </form>
    </header>

    <main class="mt-10 max-w-4xl mx-auto p-6 bg-white rounded-lg shadow-md">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-semibold text-gray-800">Suas Tarefas</h2>
            <!-- Botão para adicionar nova tarefa -->
            <a href="" class="flex items-center px-4 py-2 bg-green-600 text-white font-semibold rounded-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">
                <span class="mr-2">Adicionar Tarefa</span>
                <span class="text-lg font-bold">+</span>
            </a>
        </div>

        <!-- Loop through tasks and create dropdowns -->

            <div x-data="{ open: false }" class="mb-4">
                <!-- Dropdown button -->
                <button @click="open = !open" class="w-full px-4 py-2 bg-indigo-600 text-white font-semibold rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">

                </button>
                
                <!-- Dropdown content -->
                <div x-show="open" class="mt-2 p-4 border border-gray-300 rounded-md bg-gray-50">
                    <p><strong>Descrição: </strong> </p>
                    <p><strong>Data de criação: </strong> </p>
                    <p><strong>Status: </strong> </p>
                </div>
            </div>

            <p class="text-gray-600">Nenhuma tarefa cadastrada.</p>
    </main>

    <!-- Alpine.js for the dropdown functionality -->
    <script src="https://unpkg.com/alpinejs" defer></script>
</body>
</html>