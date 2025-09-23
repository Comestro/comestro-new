@extends('admin.layouts.app')

@section('title', 'Projects')

@section('content')
<div class="bg-white rounded-lg shadow-sm p-6">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-semibold text-gray-800">Projects</h2>
        <a href="{{ url('/admin/projects/create') }}" class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-md flex items-center">
            <i class="fas fa-plus mr-2"></i> Add New Project
        </a>
    </div>

    <!-- Search and Filter -->
    <div class="mb-6">
        <form action="{{ url('/admin/projects') }}" method="GET" class="flex flex-col md:flex-row gap-4">
            <div class="flex-1">
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Search projects..." 
                       class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
            </div>
            <div class="w-full md:w-48">
                <select name="category" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                    <option value="">All Categories</option>
                    <option value="Web Development" {{ request('category') == 'Web Development' ? 'selected' : '' }}>Web Development</option>
                    <option value="Mobile App" {{ request('category') == 'Mobile App' ? 'selected' : '' }}>Mobile App</option>
                    <option value="UI/UX Design" {{ request('category') == 'UI/UX Design' ? 'selected' : '' }}>UI/UX Design</option>
                    <option value="E-commerce" {{ request('category') == 'E-commerce' ? 'selected' : '' }}>E-commerce</option>
                    <option value="Enterprise Solution" {{ request('category') == 'Enterprise Solution' ? 'selected' : '' }}>Enterprise Solution</option>
                </select>
            </div>
            <div class="w-full md:w-48">
                <select name="status" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                    <option value="">All Status</option>
                    <option value="1" {{ request('status') == '1' ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ request('status') == '0' ? 'selected' : '' }}>Draft</option>
                </select>
            </div>
            <div>
                <button type="submit" class="w-full md:w-auto bg-gray-200 hover:bg-gray-300 text-gray-800 py-2 px-4 rounded-md">
                    <i class="fas fa-search mr-2"></i> Filter
                </button>
            </div>
        </form>
    </div>

    <!-- Projects Table -->
    <div class="bg-white rounded-lg shadow overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Project
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
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Featured
                    </th>
                    <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($projects as $project)
                <tr>
                    <td class="px-6 py-4">
                        <div class="flex items-center">
                            @if($project->image)
                                <div class="flex-shrink-0 h-10 w-10">
                                    <img class="h-10 w-10 rounded-md object-cover" src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}">
                                </div>
                            @else
                                <div class="flex-shrink-0 h-10 w-10 bg-gray-200 rounded-md flex items-center justify-center text-gray-500">
                                    <i class="fas fa-image"></i>
                                </div>
                            @endif
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">{{ $project->title }}</div>
                                <div class="text-sm text-gray-500">{{ Str::limit($project->description, 50) }}</div>
                            </div>
                        </div>
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
                    <td class="px-6 py-4 whitespace-nowrap">
                        @if($project->featured)
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                Featured
                            </span>
                        @else
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">
                                Standard
                            </span>
                        @endif
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                        <a href="{{ url('/admin/projects/' . $project->id) }}" class="text-blue-600 hover:text-blue-900 mr-3">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="{{ url('/admin/projects/' . $project->id . '/edit') }}" class="text-indigo-600 hover:text-indigo-900 mr-3">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ url('/admin/projects/' . $project->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('Are you sure you want to delete this project?')">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">
                        No projects found. <a href="{{ url('/admin/projects/create') }}" class="text-blue-600">Create your first project</a>.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="mt-6">
        {{ $projects->links() }}
    </div>
</div>
@endsection