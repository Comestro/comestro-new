<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Comestro Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }
        
        .sidebar-active {
            background-color: rgba(0, 183, 255, 0.1);
            color: #00B7FF;
            border-right: 3px solid #00B7FF;
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="fixed inset-y-0 left-0 bg-white shadow-md w-64 hidden md:block z-10">
            <div class="flex flex-col h-full">
                <div class="p-4 border-b">
                    <img src="{{ asset('comestro.png') }}" alt="Comestro" class="h-10">
                </div>
                
                <nav class="flex-1 overflow-y-auto py-4">
                    <ul class="space-y-1">
                        <li>
                            <a href="{{ url('/admin/dashboard') }}" 
                               class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-100 
                                     {{ request()->is('admin/dashboard') ? 'sidebar-active' : '' }}">
                                <i class="fas fa-tachometer-alt w-6"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/admin/projects') }}" 
                               class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-100 
                                     {{ request()->is('admin/projects*') ? 'sidebar-active' : '' }}">
                                <i class="fas fa-project-diagram w-6"></i>
                                <span>Projects</span>
                            </a>
                        </li>
                        @if(auth()->user() && auth()->user()->isAdmin())
                        <li>
                            <a href="{{ url('/admin/users') }}" 
                               class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-100 
                                     {{ request()->is('admin/users*') ? 'sidebar-active' : '' }}">
                                <i class="fas fa-users w-6"></i>
                                <span>Users</span>
                            </a>
                        </li>
                        @endif
                        <li>
                            <a href="{{ url('/admin/settings') }}" 
                               class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-100 
                                     {{ request()->is('admin/settings*') ? 'sidebar-active' : '' }}">
                                <i class="fas fa-cog w-6"></i>
                                <span>Settings</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                
                <div class="p-4 border-t">
                    <div class="flex items-center">
                        <div class="w-8 h-8 rounded-full bg-gray-300 flex items-center justify-center">
                            <i class="fas fa-user text-white"></i>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-gray-700">{{ auth()->user()->name ?? 'Admin User' }}</p>
                            <p class="text-xs text-gray-500">{{ auth()->user()->role ?? 'admin' }}</p>
                        </div>
                    </div>
                    <div class="mt-4">
                        <form action="{{ url('/logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="flex items-center text-sm text-red-600 hover:text-red-800">
                                <i class="fas fa-sign-out-alt mr-2"></i> Logout
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </aside>

        <div class="flex-1 md:ml-64">
            <!-- Top Navbar -->
            <header class="bg-white shadow-sm">
                <div class="flex items-center justify-between h-16 px-6">
                    <div class="flex items-center">
                        <button id="sidebar-toggle" class="text-gray-600 focus:outline-none md:hidden">
                            <i class="fas fa-bars text-xl"></i>
                        </button>
                        <h1 class="text-xl font-semibold text-gray-800 ml-4">@yield('title')</h1>
                    </div>
                    <div class="flex items-center">
                        <a href="{{ url('/') }}" target="_blank" class="text-sm text-gray-600 hover:text-gray-900">
                            <i class="fas fa-external-link-alt mr-1"></i> View Website
                        </a>
                    </div>
                </div>
            </header>

            <!-- Mobile Sidebar (hidden by default) -->
            <div id="mobile-sidebar" class="fixed inset-0 bg-black bg-opacity-50 z-20 hidden">
                <div class="bg-white w-64 h-full overflow-y-auto">
                    <div class="p-4 border-b flex items-center justify-between">
                        <img src="{{ asset('comestro.png') }}" alt="Comestro" class="h-8">
                        <button id="close-sidebar" class="text-gray-600 focus:outline-none">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                    
                    <nav class="py-4">
                        <ul class="space-y-1">
                            <li>
                                <a href="{{ url('/admin/dashboard') }}" class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-100 {{ request()->is('admin/dashboard') ? 'sidebar-active' : '' }}">
                                    <i class="fas fa-tachometer-alt w-6"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/admin/projects') }}" class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-100 {{ request()->is('admin/projects*') ? 'sidebar-active' : '' }}">
                                    <i class="fas fa-project-diagram w-6"></i>
                                    <span>Projects</span>
                                </a>
                            </li>
                            @if(auth()->user() && auth()->user()->isAdmin())
                            <li>
                                <a href="{{ url('/admin/users') }}" class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-100 {{ request()->is('admin/users*') ? 'sidebar-active' : '' }}">
                                    <i class="fas fa-users w-6"></i>
                                    <span>Users</span>
                                </a>
                            </li>
                            @endif
                            <li>
                                <a href="{{ url('/admin/settings') }}" class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-100 {{ request()->is('admin/settings*') ? 'sidebar-active' : '' }}">
                                    <i class="fas fa-cog w-6"></i>
                                    <span>Settings</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    
                    <div class="p-4 border-t">
                        <div class="flex items-center">
                            <div class="w-8 h-8 rounded-full bg-gray-300 flex items-center justify-center">
                                <i class="fas fa-user text-white"></i>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-700">{{ auth()->user()->name ?? 'Admin User' }}</p>
                                <p class="text-xs text-gray-500">{{ auth()->user()->role ?? 'admin' }}</p>
                            </div>
                        </div>
                        <div class="mt-4">
                            <form action="{{ url('/logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="flex items-center text-sm text-red-600 hover:text-red-800">
                                    <i class="fas fa-sign-out-alt mr-2"></i> Logout
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <main class="p-6">
                @if(session('success'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6" role="alert">
                    <p>{{ session('success') }}</p>
                </div>
                @endif

                @if(session('error'))
                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6" role="alert">
                    <p>{{ session('error') }}</p>
                </div>
                @endif

                @yield('content')
            </main>

            <!-- Footer -->
            <footer class="bg-white p-4 border-t text-center text-gray-500 text-sm">
                &copy; {{ date('Y') }} Comestro Techlabs Pvt. Ltd. All rights reserved.
            </footer>
        </div>
    </div>

    <script>
        // Mobile sidebar toggle
        document.getElementById('sidebar-toggle')?.addEventListener('click', function() {
            document.getElementById('mobile-sidebar').classList.toggle('hidden');
        });
        
        document.getElementById('close-sidebar')?.addEventListener('click', function() {
            document.getElementById('mobile-sidebar').classList.add('hidden');
        });
        
        // Close mobile sidebar when clicking outside
        document.addEventListener('click', function(e) {
            const mobileSidebar = document.getElementById('mobile-sidebar');
            const sidebarToggle = document.getElementById('sidebar-toggle');
            
            if (mobileSidebar && !mobileSidebar.classList.contains('hidden') && 
                !mobileSidebar.contains(e.target) && e.target !== sidebarToggle) {
                mobileSidebar.classList.add('hidden');
            }
        });

        @yield('scripts')
    </script>
</body>
</html>