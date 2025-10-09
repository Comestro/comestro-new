@extends('admin.layouts.app')

@section('title', 'Add Internship')

@section('content')
<section class="py-16 bg-white min-h-screen">
    <div class="container mx-auto px-[10%]">

        {{-- Header --}}
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold">Add <span class="text-[#00B7FF]">Internship</span></h2>
            <p class="text-gray-600 mt-3 max-w-2xl mx-auto">
                Create a new internship listing for students to apply and gain real-world experience.
            </p>
        </div>

        {{-- Form Card --}}
        <div class="max-w-3xl mx-auto bg-white border border-gray-200 shadow-lg rounded-xl p-8" x-data="{ questions: [''] }">
            <form action="{{route('admin.admin.internship.store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                {{-- Internship Title --}}
                <div class="mb-5">
                    <label class="block text-gray-700 font-medium mb-2">Internship Title</label>
                    <input type="text" name="title" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00B7FF] focus:outline-none" placeholder="e.g., Web Development Intern" required>
                </div>
                <div class="mb-5">
                    <label class="block text-gray-700 font-medium mb-2">Skills required</label>
                    <input type="text" name="skills_required" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00B7FF] focus:outline-none" placeholder="e.g., Python, java, etc..." required>
                </div>

                {{-- Description --}}
                <div class="mb-5">
                    <label class="block text-gray-700 font-medium mb-2">Description</label>
                    <textarea name="description" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00B7FF] focus:outline-none" placeholder="Describe the internship role and expectations..." required></textarea>
                </div>

                {{-- Duration and Stipend --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-5">
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Duration</label>
                        <input type="text" name="duration" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00B7FF] focus:outline-none" placeholder="e.g., 3-6 months">
                    </div>

                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Stipend</label>
                        <input type="text" name="stipend" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00B7FF] focus:outline-none" placeholder="e.g., ₹10,000/month">
                    </div>
                </div>

                {{-- Internship Questions --}}
                <div class="mb-5">
                    <label class="block text-gray-700 font-medium mb-2">Internship Questions</label>

                    <template x-for="(question, index) in questions" :key="index">
                        <div class="flex items-center gap-3 mb-3">
                            <input type="text" :name="'questions['+index+']'" x-model="questions[index]"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00B7FF] focus:outline-none"
                                placeholder="Enter a question (e.g., Why do you want this internship?)">
                            <button type="button" @click="questions.splice(index, 1)"
                                class="text-red-500 hover:text-red-700"><i class="fas fa-trash"></i></button>
                        </div>
                    </template>

                    <button type="button" @click="questions.push('')"
                        class="mt-2 flex items-center text-[#00B7FF] font-medium hover:underline">
                        <i class="fas fa-plus mr-2"></i> Add More Question
                    </button>
                </div>

                {{-- Icon or Image Upload --}}
                {{-- <div class="mb-5">
                    <label class="block text-gray-700 font-medium mb-2">Internship Icon / Image</label>
                    <input type="file" name="image" accept="image/*"
                        class="w-full text-gray-600 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-[#00B7FF]/10 file:text-[#00B7FF] hover:file:bg-[#00B7FF]/20">
                </div> --}}

                {{-- Submit Button --}}
                <div class="text-center mt-8">
                    <button type="submit"
                        class="px-8 py-3 bg-[#00B7FF] text-white font-semibold rounded-lg shadow hover:bg-[#0096d6] transition duration-200">
                        <i class="fas fa-paper-plane mr-2"></i> Submit Internship
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

{{-- Include Alpine.js --}}
<script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
@endsection
