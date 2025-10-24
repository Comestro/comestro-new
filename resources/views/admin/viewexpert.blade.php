@extends('admin.layouts.app')
@section('title', 'View Expert')

@section('content')
<div class="max-w-4xl mx-auto bg-white shadow-lg rounded-xl p-8 mt-8">
    <h1 class="text-3xl font-bold text-[#0079C1] mb-6 text-center">Expert Details</h1>

    {{-- Expert Info Card --}}
    <div class="flex flex-col md:flex-row items-center md:items-start gap-6">
        {{-- Profile Image --}}
        <div class="flex-shrink-0">
            @if($expert->image)
                <img src="{{ asset('storage/' . $expert->image) }}" alt="{{ $expert->name }}"
                     class="w-40 h-40 rounded-full object-cover border-4 border-[#0079C1]">
            @else
                <div class="w-40 h-40 rounded-full bg-gray-200 flex items-center justify-center text-gray-500 font-semibold border-4 border-[#0079C1]">
                    No Image
                </div>
            @endif
        </div>

        {{-- Expert Details --}}
        <div class="flex-1 space-y-3">
            <div>
                <h2 class="text-xl font-semibold text-gray-700">Name:</h2>
                <p class="text-gray-900 text-lg">{{ $expert->name }}</p>
            </div>
            <div>
                <h2 class="text-xl font-semibold text-gray-700">Email:</h2>
                <p class="text-gray-900 text-lg">{{ $expert->email }}</p>
            </div>
            <div>
                <h2 class="text-xl font-semibold text-gray-700">Skill:</h2>
                <p class="text-gray-900 text-lg">{{ $expert->skill }}</p>
            </div>
            <div>
                <h2 class="text-xl font-semibold text-gray-700">Bio:</h2>
                <p class="text-gray-900 text-lg">{{ $expert->bio }}</p>
            </div>
        </div>
    </div>

    {{-- Back Button --}}
    <div class="mt-6 text-center">
        <a href="{{ route('admin.expertIndex') }}"
           class="inline-block bg-[#0079C1] text-white px-6 py-3 rounded-lg hover:bg-[#0066a8] transition font-semibold">
            Back to Experts
        </a>
    </div>
</div>
@endsection
