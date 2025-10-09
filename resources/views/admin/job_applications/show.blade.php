@extends('admin.layouts.app')

@section('title', 'View Job Application')

@section('content')
<div class="max-w-5xl mx-auto py-10">

    <h2 class="text-3xl font-bold mb-6 text-gray-800">Job Application Details</h2>

    {{-- Success message --}}
    @if(session('success'))
        <div class="mb-4 p-4 bg-green-100 text-green-700 rounded">
            {{ session('success') }}
        </div>
    @endif

    {{-- Application Info --}}
    <div class="bg-white shadow rounded-lg p-6 mb-6 border">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <p class="font-semibold text-gray-700">Name:</p>
                <p class="text-gray-800">{{ $application->name }}</p>
            </div>
            <div>
                <p class="font-semibold text-gray-700">Email:</p>
                <p class="text-gray-800">{{ $application->email }}</p>
            </div>
            <div>
                <p class="font-semibold text-gray-700">Phone:</p>
                <p class="text-gray-800">{{ $application->phone ?? 'N/A' }}</p>
            </div>
            <div>
                <p class="font-semibold text-gray-700">Applied For:</p>
                <p class="text-gray-800">{{ $application->careerJob->title ?? 'N/A' }}</p>
            </div>
        </div>

        <div class="mt-4">
            <p class="font-semibold text-gray-700">Cover Letter:</p>
            <p class="text-gray-800 whitespace-pre-line mt-1">{{ $application->cover_letter ?? 'N/A' }}</p>
        </div>

        <div class="mt-4">
            <p class="font-semibold text-gray-700">Resume:</p>
            @if($application->resume)
                <a href="{{ asset('storage/' . $application->resume) }}" target="_blank"
                   class="inline-block mt-2 text-blue-600 hover:underline">
                    View Resume (PDF)
                </a>
            @else
                <p class="text-gray-500 mt-1">No resume uploaded.</p>
            @endif
        </div>
    </div>

    {{-- Action Buttons --}}
    <div class="flex justify-between">
        <a href="{{ route('admin.applications.index') }}"
           class="px-6 py-2 bg-gray-500 text-white rounded hover:bg-gray-600 transition">
           ← Back to Applications
        </a>

        <form action="{{ route('admin.applications.destroy', $application->id) }}" method="POST"
              onsubmit="return confirm('Are you sure you want to delete this application?')">
            @csrf
            @method('DELETE')
            <button type="submit"
                    class="px-6 py-2 bg-red-600 text-white rounded hover:bg-red-700 transition">
                Delete Application
            </button>
        </form>
    </div>
</div>
@endsection
