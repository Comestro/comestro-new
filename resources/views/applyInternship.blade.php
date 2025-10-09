@extends('layouts.app') 
@section('title', 'Apply Internship')

@section('content')
<section class="py-20 bg-white min-h-screen">
    <div class="container mx-auto px-[10%]">

        {{-- Header --}}
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold">Apply for 
                <span class="text-[#00B7FF]">{{ $internship->title ?? 'Internship' }}</span>
            </h2>
            <p class="text-gray-600 mt-3 max-w-2xl mx-auto">
                Fill out the form below to apply for this internship opportunity and start your professional journey.
            </p>
        </div>

        {{-- Form Card --}}
        <div class="max-w-3xl mx-auto bg-white border border-gray-200 shadow-lg rounded-xl p-8">
            <form action="{{ route('internship.apply.submit', $internship->id) }}" method="POST" enctype="multipart/form-data">
                @csrf

                {{-- Full Name --}}
                <div class="mb-5">
                    <label class="block text-gray-700 font-medium mb-2">Full Name</label>
                    <input type="text" name="name" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00B7FF] focus:outline-none" 
                        placeholder="Enter your full name" required>
                </div>

                {{-- Email --}}
                <div class="mb-5">
                    <label class="block text-gray-700 font-medium mb-2">Email Address</label>
                    <input type="email" name="email"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00B7FF] focus:outline-none"
                        placeholder="Enter your email" required>
                </div>

                {{-- Phone --}}
                <div class="mb-5">
                    <label class="block text-gray-700 font-medium mb-2">Phone Number</label>
                    <input type="text" name="phone"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00B7FF] focus:outline-none"
                        placeholder="Enter your contact number" required>
                </div>

                {{-- Education --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-5">
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Highest Qualification</label>
                        <input type="text" name="qualification"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00B7FF] focus:outline-none"
                            placeholder="e.g., B.Tech in Computer Science">
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">College / University</label>
                        <input type="text" name="college"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00B7FF] focus:outline-none"
                            placeholder="e.g., Delhi University">
                    </div>
                </div>

                {{-- Skills Required --}}
                @if(!empty($internship->skills_required))
                <div class="mb-8">
                    <label class="block text-gray-700 font-semibold mb-2">Skills Required for this Internship:</label>
                    <div class="bg-[#00B7FF]/5 border border-[#00B7FF]/30 rounded-lg p-4 text-gray-700">
                        {{ $internship->skills_required }}
                    </div>
                </div>
                @endif

                {{-- Applicant Skills --}}
                <div class="mb-5">
                    <label class="block text-gray-700 font-medium mb-2">Your Skills</label>
                    <input type="text" name="skills"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00B7FF] focus:outline-none"
                        placeholder="e.g., HTML, CSS, Python, etc.">
                </div>

                {{-- Internship Questions --}}
                @if(!empty($internship->questions))
                    @php
                        // Handle both JSON or string stored questions
                        if (is_array($internship->questions)) {
                            $questions = $internship->questions;
                        } else {
                            $questions = preg_split("/[\r\n,]+/", $internship->questions ?? '');
                        }
                    @endphp

                    @foreach($questions as $index => $question)
                        <div class="mb-5">
                            <label class="block text-gray-700 font-medium mb-2">{{ trim($question) }}</label>
                            <textarea name="answers[{{ $index }}]" rows="3"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00B7FF] focus:outline-none"
                                placeholder="Your answer..." required></textarea>
                        </div>
                    @endforeach
                @endif

                {{-- Motivation --}}
                <div class="mb-5">
                    <label class="block text-gray-700 font-medium mb-2">Why do you want this internship?</label>
                    <textarea name="motivation" rows="4"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00B7FF] focus:outline-none"
                        placeholder="Explain your motivation..." required></textarea>
                </div>

                {{-- Resume Upload --}}
                <div class="mb-5">
                    <label class="block text-gray-700 font-medium mb-2">Upload Your Resume (PDF)</label>
                    <input type="file" name="resume" accept=".pdf"
                        class="w-full text-gray-600 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 
                               file:text-sm file:font-semibold file:bg-[#00B7FF]/10 file:text-[#00B7FF] 
                               hover:file:bg-[#00B7FF]/20">
                </div>

                {{-- Submit --}}
                <div class="text-center mt-8">
                    <button type="submit"
                        class="px-8 py-3 bg-[#00B7FF] text-white font-semibold rounded-lg shadow hover:bg-[#0096d6] transition duration-200">
                        <i class="fas fa-paper-plane mr-2"></i> Submit Application
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
@endsection
