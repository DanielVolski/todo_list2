<!-- resources/views/auth/register.blade.php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Cadastro</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex flex-col justify-center items-center">
        <div class="w-full max-w-md">
            <div class="bg-white p-8 rounded-lg shadow-md">
                <h2 class="text-2xl font-semibold text-center text-gray-800 mb-6">Cadastro</h2>

                <form method="POST" action="">
                    <!-- Nome Completo -->
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Nome Completo</label>
                        <input id="name" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" type="text" name="name" value="" required autofocus>
                    </div>

                    <!-- Data de Nascimento -->
                    <div class="mb-4">
                        <label for="dob" class="block text-sm font-medium text-gray-700">Data de Nascimento</label>
                        <input id="dob" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" type="date" name="dob" value="" required>
                    </div>

                    <!-- CPF -->
                    <div class="mb-4">
                        <label for="cpf" class="block text-sm font-medium text-gray-700">CPF</label>
                        <input id="cpf" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" type="text" name="cpf" value="" required>
                    </div>

                    <!-- Senha -->
                    <div class="mb-4">
                        <label for="password" class="block text-sm font-medium text-gray-700">Senha</label>
                        <input id="password" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" type="password" name="password" required>
                    </div>

                    <!-- Confirmação de Senha -->
                    <div class="mb-6">
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirmação de Senha</label>
                        <input id="password_confirmation" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" type="password" name="password_confirmation" required>
                    </div>

                    <div class="flex items-center justify-center">
                        <button type="submit" class="w-full px-4 py-2 bg-indigo-600 text-white font-semibold rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition">
                            Cadastrar
                        </button>
                    </div>
                </form>
            </div>

            <div class="mt-6 text-center">
                <p class="text-sm text-gray-600">Já tem uma conta? <a href="" class="text-indigo-600 hover:text-indigo-500">Faça login</a></p>
            </div>
        </div>
    </div>
</body>
</html>