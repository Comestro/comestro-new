<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register User - Comestro Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center py-12">
    <div class="bg-white rounded-lg shadow-lg p-8 w-full max-w-md">
        <div class="text-center mb-8">
            <img src="{{ asset('comestro.png') }}" alt="Comestro" class="h-12 mx-auto mb-4">
            <h1 class="text-2xl font-bold text-gray-800">Create New User</h1>
            <p class="text-gray-500">Create a new admin user or editor</p>
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

        <form action="{{ url('/register') }}" method="POST" class="space-y-6">
            @csrf
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required autofocus
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#00B7FF] focus:border-transparent"
                    placeholder="Full Name">
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#00B7FF] focus:border-transparent"
                    placeholder="your@email.com">
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                <input type="password" id="password" name="password" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#00B7FF] focus:border-transparent"
                    placeholder="••••••••">
            </div>

            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#00B7FF] focus:border-transparent"
                    placeholder="••••••••">
            </div>

            <div>
                <label for="role" class="block text-sm font-medium text-gray-700 mb-1">User Role</label>
                <select id="role" name="role" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#00B7FF] focus:border-transparent">
                    <option value="admin">Admin</option>
                    <option value="editor">Editor</option>
                    <option value="user">User</option>
                </select>
            </div>

            <div>
                <button type="submit" class="w-full bg-[#00B7FF] hover:bg-[#0099CC] text-white py-2 px-4 rounded-md transition duration-300">
                    Create User
                </button>
            </div>
        </form>

        <div class="mt-6 text-center">
            <a href="/admin/dashboard" class="text-sm text-[#00B7FF] hover:underline">Back to Dashboard</a>
        </div>
    </div>
</body>
</html>