<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Comestro Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white rounded-lg shadow-lg p-8 w-full max-w-md">
        <div class="text-center mb-8">
            <img src="{{ asset('comestro.png') }}" alt="Comestro" class="h-12 mx-auto mb-4">
            <h1 class="text-2xl font-bold text-gray-800">Admin Login</h1>
            <p class="text-gray-500">Sign in to access your admin dashboard</p>
        </div>
        
        @if ($errors->any())
        <div class="bg-red-50 text-red-600 p-4 rounded-lg mb-6">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ url('/login') }}" method="POST" class="space-y-6">
            @csrf
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#00B7FF] focus:border-transparent"
                    placeholder="your@email.com">
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                <input type="password" id="password" name="password" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#00B7FF] focus:border-transparent"
                    placeholder="••••••••">
            </div>

            <div class="flex items-center">
                <input type="checkbox" id="remember" name="remember" class="h-4 w-4 text-[#00B7FF] rounded border-gray-300 focus:ring-[#00B7FF]">
                <label for="remember" class="ml-2 block text-sm text-gray-700">Remember me</label>
            </div>

            <div>
                <button type="submit" class="w-full bg-[#00B7FF] hover:bg-[#0099CC] text-white py-2 px-4 rounded-md transition duration-300">
                    Sign In
                </button>
            </div>
        </form>

        <div class="mt-6 text-center">
            <a href="/" class="text-sm text-[#00B7FF] hover:underline">Back to Website</a>
        </div>
    </div>
</body>
</html>