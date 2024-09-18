<!-- resources/views/auth/login.blade.php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex flex-col justify-center items-center">
        <div class="w-full max-w-md">
            <div class="bg-white p-8 rounded-lg shadow-md">
                <h2 class="text-2xl font-semibold text-center text-gray-800 mb-6">Login</h2>

                <!-- Session Status -->
                @if (session('status'))
                    <div class="mb-4 text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif

                <!-- Validation Errors -->
                @if ($errors->any())
                    <div class="mb-4 text-sm text-red-600">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="">

                    <!-- Email Address -->
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input id="email" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" type="email" name="email" value="" required autofocus>
                    </div>

                    <!-- Password -->
                    <div class="mb-6">
                        <label for="password" class="block text-sm font-medium text-gray-700">Senha</label>
                        <input id="password" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" type="password" name="password" required>
                    </div>

                    <!-- Remember Me -->
                    <div class="flex items-center justify-between mb-6">
                        <label for="remember_me" class="inline-flex items-center text-sm text-gray-600">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" name="remember">
                            <span class="ml-2">Lembrar-me</span>
                        </label>

                        @if (Route::has('password.request'))
                            <a class="text-sm text-indigo-600 hover:text-indigo-500" href="">
                                Esqueceu sua senha?
                            </a>
                        @endif
                    </div>

                    <div class="flex items-center justify-center">
                        <button type="submit" class="w-full px-4 py-2 bg-indigo-600 text-white font-semibold rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition">
                            Entrar
                        </button>
                    </div>
                </form>
            </div>

            <div class="mt-6 text-center">
                <p class="text-sm text-gray-600">Não tem uma conta? <a href="" class="text-indigo-600 hover:text-indigo-500">Cadastre-se</a></p>
            </div>
        </div>
    </div>
</body>
</html>