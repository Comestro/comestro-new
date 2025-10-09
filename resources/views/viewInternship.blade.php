@extends('layouts.app')

@section('title', 'View Internship')

@section('content')
    <div class="max-w-5xl mx-auto py-20 px-4 sm:px-6 lg:px-8">
        <div class="bg-white shadow-xl rounded-2xl overflow-hidden border border-gray-100">

            <!-- Header Section -->
            <div class="bg-gradient-to-r from-[#00B7FF] to-[#00D4FF] p-8 text-white">
                <h1 class="text-4xl font-bold mb-2">{{ $internship->title }}</h1>
                <p class="text-sm opacity-90">Explore details and requirements for this internship opportunity.</p>
            </div>

            <!-- Content Section -->
            <div class="p-8 space-y-6">

                <div>
                    <h2 class="text-lg font-semibold text-gray-800 mb-1">Required Skills</h2>
                    <p class="text-gray-700 leading-relaxed bg-gray-50 p-3 rounded-lg border border-gray-100">
                        {{ $internship->skills_required }}
                    </p>
                </div>

                <div>
                    <h2 class="text-lg font-semibold text-gray-800 mb-1">Description</h2>
                    <p class="text-gray-700 leading-relaxed bg-gray-50 p-3 rounded-lg border border-gray-100">
                        {{ $internship->description }}
                    </p>
                </div>

                @if($internship->duration)
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="bg-gray-50 p-4 rounded-lg border border-gray-100">
                            <p class="text-gray-600 text-sm uppercase font-medium">Duration</p>
                            <p class="text-gray-800 font-semibold">{{ $internship->duration }}</p>
                        </div>

                        @if($internship->stipend)
                            <div class="bg-gray-50 p-4 rounded-lg border border-gray-100">
                                <p class="text-gray-600 text-sm uppercase font-medium">Stipend</p>
                                <p class="text-gray-800 font-semibold">{{ $internship->stipend }}</p>
                            </div>
                        @endif
                    </div>
                @endif

                @if($internship->questions && count($internship->questions) > 0)
                    <div>
                        <h2 class="text-lg font-semibold text-gray-800 mb-2">Interview Questions</h2>
                        <ul
                            class="list-disc list-inside space-y-2 text-gray-700 bg-gray-50 p-4 rounded-lg border border-gray-100">
                            @foreach($internship->questions as $question)
                                <li>{{ $question }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Divider / Bridge -->
                <div class="relative my-10">
                    <div class="h-px bg-gradient-to-r from-transparent via-sky-400 to-transparent"></div>
                    <div class="absolute inset-0 flex justify-center -top-3">
                        <span class="bg-white px-3 text-sky-500 font-medium text-sm">Next Step</span>
                    </div>
                </div>

                <!-- Navigation Buttons -->
                <div class="pt-4">
                    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-0">
                        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">

                            {{-- Left: Back link --}}
                            <a href="{{ route('careers') }}"
                                class="inline-flex items-center text-sky-500 hover:text-sky-600 font-semibold transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-sky-300 rounded"
                                aria-label="Back to Internships">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="1.5" class="w-5 h-5 mr-2" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                                </svg>
                                <span>Back to Internships</span>
                            </a>

                            {{-- Right: Apply button / CTA --}}
                            <div class="w-full sm:w-auto">
                                <a href="{{ route('applyInternship', $internship->id) }}"
                                    class="inline-flex items-center justify-center gap-2 w-full sm:w-auto px-4 py-2 bg-gradient-to-r from-sky-500 to-sky-400 text-white font-semibold rounded-lg shadow-sm hover:from-sky-600 hover:to-sky-500 transition transform hover:-translate-y-0.5 focus:outline-none focus:ring-2 focus:ring-sky-300"
                                    role="button" aria-label="Apply for this internship">
                                    <span>Apply Now</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="1.5" class="w-4 h-4" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M12 5l7 7-7 7" />
                                    </svg>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
