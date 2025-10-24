@extends('admin.layouts.app')

@section('title', 'Expert Developers')

@section('content')
    <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-xl p-8 mt-8">
        <h1 class="text-3xl font-bold text-[#0079C1] mb-6 text-center">
            Add Expert Developer
        </h1>

        {{-- Success message --}}
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-5">
                {{ session('success') }}
            </div>
        @endif

        {{-- Developer Add Form --}}
        <form action="{{route('admin.expertDev.store')}}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <div>
                <label for="name" class="block text-gray-700 font-semibold mb-2">Full Name</label>
                <input type="text" name="name" id="name"
                    class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-[#0079C1]"
                    placeholder="Enter developer name" required>
            </div>

            <div>
                <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                <input type="email" name="email" id="email"
                    class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-[#0079C1]"
                    placeholder="Enter developer email" required>
            </div>

            <div>
                <label for="skill" class="block text-gray-700 font-semibold mb-2">Skills</label>
                <input type="text" name="skill" id="skill"
                    class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-[#0079C1]"
                    placeholder="e.g., Laravel, Livewire, React" required>
            </div>
            <div>
                <label for="bio" class="block text-gray-700 font-semibold mb-2">Short Bio</label>
                <textarea name="bio" id="bio" rows="4"
                    class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-[#0079C1]"
                    placeholder="Write a short description about the developer" required></textarea>
            </div>

            <div>
                <label for="image" class="block text-gray-700 font-semibold mb-2">Profile Photo</label>
                <input type="file" name="image" id="image" class="w-full border border-gray-300 rounded-lg p-2 bg-gray-50"
                    accept="image/*">
            </div>

            <div class="text-center">
                <button type="submit"
                    class="bg-[#0079C1] text-white px-6 py-3 rounded-lg hover:bg-[#0066a8] transition font-semibold">
                    Add Developer
                </button>
            </div>
        </form>
    </div>
@endsection