@extends('layouts.app')
@section('title','Apply Form')

@section('content')
<div class="max-w-4xl mx-auto py-20">
    <h1 class="text-3xl font-bold mb-10">Job Application Form</h1>
    <h1 class="text-3xl font-bold mb-10">Apply for {{ $job->title }}</h1>

    @if(session('success'))
        <div class="bg-green-100 text-green-800 p-4 rounded mb-6">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('careers.submitApplication', $job->id) }}" method="POST" enctype="multipart/form-data" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf

        <!-- Personal Information -->
        <h2 class="text-xl font-semibold mb-4">Personal Information</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Full Name</label>
                <input type="text" name="name" id="name" required
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                <input type="email" name="email" id="email" required
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">Phone Number</label>
                <input type="text" name="phone" id="phone" required
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2" for="dob">Date of Birth</label>
                <input type="date" name="dob" id="dob" required
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
        </div>

        <!-- Education -->
        <h2 class="text-xl font-semibold mt-8 mb-4">Education</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2" for="degree">Highest Degree</label>
                <input type="text" name="degree" id="degree" required
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2" for="college">University / College</label>
                <input type="text" name="college" id="college" required
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2" for="year">Year of Passing</label>
                <input type="number" name="year" id="year" required
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2" for="percentage">Percentage / CGPA</label>
                <input type="text" name="percentage" id="percentage" required
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
        </div>

        <!-- Work Experience -->
        <h2 class="text-xl font-semibold mt-8 mb-4">Work Experience</h2>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="experience">Total Experience (in years)</label>
            <input type="number" step="0.1" name="experience" id="experience" required
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="previous_company">Previous Company</label>
            <input type="text" name="previous_company" id="previous_company"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="role">Role / Designation</label>
            <input type="text" name="role" id="role"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>

        <!-- Technical Skills -->
        <h2 class="text-xl font-semibold mt-8 mb-4">Technical Skills</h2>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="skills">Programming Languages / Tools</label>
            <input type="text" name="skills" id="skills" placeholder="e.g. Java, Python, React, AWS"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>

        <!-- Job Preferences -->
        <h2 class="text-xl font-semibold mt-8 mb-4">Job Preferences</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2" for="location">Preferred Location</label>
                <input type="text" name="location" id="location"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2" for="salary">Expected Salary</label>
                <input type="text" name="salary" id="salary"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
        </div>

        <div class="mb-4 mt-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="notice_period">Notice Period (if employed)</label>
            <input type="text" name="notice_period" id="notice_period"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>

        <!-- Resume and Cover Letter -->
        <h2 class="text-xl font-semibold mt-8 mb-4">Resume & Cover Letter</h2>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="resume">Upload Resume (PDF only)</label>
            <input type="file" name="resume" id="resume" accept=".pdf" required
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>

        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="cover_letter">Cover Letter</label>
            <textarea name="cover_letter" id="cover_letter" rows="4"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
        </div>

        <div class="flex items-center justify-between">
            <button type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded focus:outline-none focus:shadow-outline">
                Submit Application
            </button>
        </div>
    </form>
</div>
@endsection
