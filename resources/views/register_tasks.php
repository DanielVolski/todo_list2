<!-- resources/views/tasks/create.blade.php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Cadastrar Nova Tarefa</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold text-center text-gray-800 mb-6">Nova Tarefa</h2>

            <!-- Formulário para criar nova tarefa -->
            <form method="POST" action="">
                <!-- Nome da Tarefa -->
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Nome da Tarefa</label>
                    <input id="name" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" type="text" name="name" required>
                </div>

                <!-- Descrição -->
                <div class="mb-4">
                    <label for="description" class="block text-sm font-medium text-gray-700">Descrição</label>
                    <textarea id="description" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" name="description" rows="4" required></textarea>
                </div>

                <!-- Status -->
                <div class="mb-4">
                    <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                    <select id="status" name="status" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500">
                        <option value="pendente">Pendente</option>
                        <option value="concluída">Concluída</option>
                    </select>
                </div>

                <!-- Botão de Submit -->
                <div class="flex justify-center">
                    <button type="submit" class="w-full px-4 py-2 bg-indigo-600 text-white font-semibold rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        Salvar Tarefa
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>