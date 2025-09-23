@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="bg-white rounded-lg shadow-sm p-6">
    <h2 class="text-2xl font-semibold text-gray-800 mb-6">Dashboard</h2>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Projects Card -->
        <div class="bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg shadow-sm p-6 text-white">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-lg font-semibold">Total Projects</h3>
                    <p class="text-3xl font-bold mt-2">{{ $projectCount ?? 0 }}</p>
                </div>
                <div class="text-white text-3xl opacity-80">
                    <i class="fas fa-project-diagram"></i>
                </div>
            </div>
            <div class="mt-4">
                <a href="{{ url('/admin/projects') }}" class="text-sm text-blue-100 hover:text-white">
                    View All Projects <i class="fas fa-arrow-right ml-1"></i>
                </a>
            </div>
        </div>

        <!-- Published Projects -->
        <div class="bg-gradient-to-br from-green-500 to-green-600 rounded-lg shadow-sm p-6 text-white">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-lg font-semibold">Active Projects</h3>
                    <p class="text-3xl font-bold mt-2">{{ $activeProjectCount ?? 0 }}</p>
                </div>
                <div class="text-white text-3xl opacity-80">
                    <i class="fas fa-check-circle"></i>
                </div>
            </div>
            <div class="mt-4">
                <a href="{{ url('/admin/projects?active=1') }}" class="text-sm text-green-100 hover:text-white">
                    View Active Projects <i class="fas fa-arrow-right ml-1"></i>
                </a>
            </div>
        </div>

        @if(auth()->user() && auth()->user()->isAdmin())
        <!-- Users Card -->
        <div class="bg-gradient-to-br from-purple-500 to-purple-600 rounded-lg shadow-sm p-6 text-white">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-lg font-semibold">Users</h3>
                    <p class="text-3xl font-bold mt-2">{{ $userCount ?? 0 }}</p>
                </div>
                <div class="text-white text-3xl opacity-80">
                    <i class="fas fa-users"></i>
                </div>
            </div>
            <div class="mt-4">
                <a href="{{ url('/admin/users') }}" class="text-sm text-purple-100 hover:text-white">
                    Manage Users <i class="fas fa-arrow-right ml-1"></i>
                </a>
            </div>
        </div>
        @endif
    </div>

    <!-- Recent Projects Section -->
    <div class="mt-8">
        <h3 class="text-xl font-semibold text-gray-800 mb-4">Recent Projects</h3>
        <div class="bg-white rounded-lg shadow overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Title
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Category
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Client
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($recentProjects ?? [] as $project)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">{{ $project->title }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-500">{{ $project->category }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{ $project->client_name }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            @if($project->active)
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    Active
                                </span>
                            @else
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">
                                    Draft
                                </span>
                            @endif
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="{{ url('/admin/projects/' . $project->id) }}" class="text-blue-600 hover:text-blue-900 mr-3">
                                View
                            </a>
                            <a href="{{ url('/admin/projects/' . $project->id . '/edit') }}" class="text-indigo-600 hover:text-indigo-900">
                                Edit
                            </a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">
                            No projects found. <a href="{{ url('/admin/projects/create') }}" class="text-blue-600">Create your first project</a>.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection