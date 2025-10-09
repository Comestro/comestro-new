@extends('admin.layouts.app')

@section('title', 'Job Applications')

@section('content')
    <div class="max-w-7xl mx-auto py-10 px-4">
        <h1 class="text-3xl font-bold mb-6">All Job Applications</h1>

        @if(session('success'))
            <div class="bg-green-100 text-green-800 p-4 rounded mb-6">
                {{ session('success') }}
            </div>
        @endif

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200 rounded-lg table-fixed">
                <thead>
                    <tr>
                        <th scope="col" class="px-4 py-2 border text-left">ID</th>
                        <th scope="col" class="px-4 py-2 border text-left">Job Title</th>
                        <th scope="col" class="px-4 py-2 border text-left">Name</th>
                        <th scope="col" class="px-4 py-2 border text-left">Email</th>
                        <th scope="col" class="px-4 py-2 border text-left">Phone</th>
                        <th scope="col" class="px-4 py-2 border text-left">Resume</th>
                        <th scope="col" class="px-4 py-2 border text-left">Cover Letter</th>
                        <th scope="col" class="px-4 py-2 border text-left">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($applications as $app)
                        <tr class="text-center border-t hover:bg-gray-50">
                            <td class="px-4 py-2 border">{{ $app->id }}</td>
                            <td class="px-4 py-2 border">{{ $app->careerjob?->title ?? 'N/A' }}</td>
                            <td class="px-4 py-2 border">{{ $app->name }}</td>
                            <td class="px-4 py-2 border truncate">{{ $app->email }}</td>
                            <td class="px-4 py-2 border">{{ $app->phone }}</td>
                            <td class="px-4 py-2 border">
                                @if($app->resume)
                                    <a href="{{ Storage::url($app->resume) }}" target="_blank"
                                        class="text-blue-600 hover:underline">View Resume</a>
                                @else
                                    N/A
                                @endif
                            </td>
                            <td class="px-4 py-2 border truncate">{{ Str::limit(e($app->cover_letter), 50, '...') ?? 'N/A' }}
                            </td>
                            <td class="px-4 py-2 border space-x-2">
                                <a href="{{ route('admin.applications.show', $app->id) }}"
                                    class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">View</a>
                                <button type="button" onclick="confirmDelete({{ $app->id }})"
                                    class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Delete</button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="px-4 py-2 text-center text-gray-500">No applications found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            <!-- Pagination Links -->
            <div class="mt-4">
                {{ $applications->links() }}
            </div>
        </div>



        <div class="mt-6">
            {{ $applications->links() }} <!-- Pagination -->
        </div>
    </div>

    <!-- CSS for Truncation -->
    <style>
        .truncate {
            max-width: 150px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    </style>
@endsection