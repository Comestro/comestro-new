@extends('admin.layouts.app')

@section('title','Add Career Job')

@section('content')
<div class="max-w-5xl mx-auto py-8" x-data="{ open: false, job: {} }">

    <h2 class="text-3xl font-bold mb-6 text-gray-800">Add New Career Job</h2>

    @if(session('success'))
        <div class="mb-4 p-4 bg-green-100 text-green-700 rounded">
            {{ session('success') }}
        </div>
    @endif

    {{-- Add Job Form --}}
    <div class="mb-8 p-6 bg-white shadow rounded">
        <form action="{{ route('admin.careerjobs.store') }}" method="POST">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block mb-2 font-medium text-gray-700">Category</label>
                    <select name="category_id" class="w-full border rounded px-3 py-2">
                        @foreach($categories as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                        @endforeach
                    </select>
                    @error('category_id') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label class="block mb-2 font-medium text-gray-700">Title</label>
                    <input type="text" name="title" class="w-full border rounded px-3 py-2" required>
                    @error('title') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label class="block mb-2 font-medium text-gray-700">Location</label>
                    <input type="text" name="location" class="w-full border rounded px-3 py-2" required>
                    @error('location') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label class="block mb-2 font-medium text-gray-700">Type</label>
                    <input type="text" name="type" class="w-full border rounded px-3 py-2" required>
                    @error('type') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label class="block mb-2 font-medium text-gray-700">Salary</label>
                    <input type="text" name="salary" class="w-full border rounded px-3 py-2" required>
                    @error('salary') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label class="block mb-2 font-medium text-gray-700">Skills (comma separated)</label>
                    <input type="text" name="skills" class="w-full border rounded px-3 py-2">
                    @error('skills') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="mt-4">
                <label class="block mb-2 font-medium text-gray-700">Description</label>
                <textarea name="description" class="w-full border rounded px-3 py-2" rows="4" required></textarea>
                @error('description') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
            </div>

            <button type="submit" class="mt-4 px-6 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                Add Job
            </button>
        </form>
    </div>

    {{-- Jobs List --}}
    <h3 class="text-2xl font-bold mb-4 text-gray-800">Existing Jobs</h3>
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border rounded shadow">
            <thead>
                <tr class="bg-gray-100 text-left">
                    <th class="px-6 py-3 border-b">#</th>
                    <th class="px-6 py-3 border-b">Title</th>
                    <th class="px-6 py-3 border-b">Category</th>
                    <th class="px-6 py-3 border-b">Location</th>
                    <th class="px-6 py-3 border-b">Type</th>
                    <th class="px-6 py-3 border-b">Salary</th>
                    <th class="px-6 py-3 border-b">Skills</th>
                    <th class="px-6 py-3 border-b">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($jobs as $jobItem)
                <tr class="border-b hover:bg-gray-50">
                    <td class="px-6 py-3">{{ $loop->iteration }}</td>
                    <td class="px-6 py-3">{{ $jobItem->title }}</td>
                    <td class="px-6 py-3">{{ $jobItem->category->name ?? '-' }}</td>
                    <td class="px-6 py-3">{{ $jobItem->location }}</td>
                    <td class="px-6 py-3">{{ $jobItem->type }}</td>
                    <td class="px-6 py-3">{{ $jobItem->salary }}</td>
                    <td class="px-6 py-3">{{ $jobItem->skills }}</td>
                    <td class="px-6 py-3">
                        <button @click="open = true; job = @json($jobItem)" class="text-blue-600 hover:underline mr-2">
                            Edit
                        </button>
                        <form action="{{ route('admin.careerjobs.destroy', $jobItem->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Are you sure?')" class="text-red-600 hover:underline">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="8" class="px-6 py-3 text-center text-gray-500">No jobs found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    {{-- Edit Modal --}}
    <div x-show="open" x-cloak class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
        <div class="bg-white p-6 rounded shadow w-full max-w-lg" @click.away="open = false">
            <h2 class="text-2xl font-bold mb-4">Edit Job</h2>
            <form :action="`/admin/careerjobs/${job.id}`" method="POST">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block mb-2 font-medium text-gray-700">Category</label>
                        <select name="category_id" class="w-full border rounded px-3 py-2" x-model="job.category_id">
                            @foreach($categories as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label class="block mb-2 font-medium text-gray-700">Title</label>
                        <input type="text" name="title" class="w-full border rounded px-3 py-2" x-model="job.title" required>
                    </div>

                    <div>
                        <label class="block mb-2 font-medium text-gray-700">Location</label>
                        <input type="text" name="location" class="w-full border rounded px-3 py-2" x-model="job.location" required>
                    </div>

                    <div>
                        <label class="block mb-2 font-medium text-gray-700">Type</label>
                        <input type="text" name="type" class="w-full border rounded px-3 py-2" x-model="job.type" required>
                    </div>

                    <div>
                        <label class="block mb-2 font-medium text-gray-700">Salary</label>
                        <input type="text" name="salary" class="w-full border rounded px-3 py-2" x-model="job.salary" required>
                    </div>

                    <div>
                        <label class="block mb-2 font-medium text-gray-700">Skills</label>
                        <input type="text" name="skills" class="w-full border rounded px-3 py-2" x-model="job.skills">
                    </div>
                </div>

                <div class="mt-4">
                    <label class="block mb-2 font-medium text-gray-700">Description</label>
                    <textarea name="description" class="w-full border rounded px-3 py-2" rows="4" x-model="job.description" required></textarea>
                </div>

                <div class="mt-4 flex justify-end">
                    <button type="button" @click="open = false" class="px-4 py-2 bg-gray-300 rounded mr-2">Cancel</button>
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Update Job</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
