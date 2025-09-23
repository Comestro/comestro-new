@extends('layouts.app')

@section('title', 'Achievements')

@section('content')
    <!-- Page Header -->
    <section class="page-header">
        <div class="container mx-auto px-[5%]">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Our <span class="text-[#00B7FF]">Achievements</span></h1>
            <p class="text-xl text-gray-200 max-w-3xl mx-auto">Recognizing excellence in training, innovation, and student accomplishments.</p>
        </div>
    </section>
    
    <!-- Training Navigation and Content -->
    <div class="bg-white">
        <div class="container mx-auto px-[5%] md:px-[5%] py-8">
            <div class="flex flex-col lg:flex-row gap-8">
                <!-- Sidebar Navigation -->
                <div class="lg:w-1/4">
                    <div class="sticky top-24 bg-white rounded-xl overflow-hidden border border-gray-100">
                        <div class="bg-[#00B7FF] p-6">
                            <h3 class="text-white font-bold text-xl">Training Portal</h3>
                        </div>
                        <nav class="p-5">
                            <ul class="space-y-3">
                                <li>
                                    <a href="{{ route('training') }}" class="flex items-center px-5 py-4 rounded-xl hover:bg-blue-50 text-gray-700 font-medium transition duration-200 text-base">
                                        <i class="fas fa-home mr-4 text-lg"></i>
                                        <span>Training Overview</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('training.courses') }}" class="flex items-center px-5 py-4 rounded-xl hover:bg-blue-50 text-gray-700 font-medium transition duration-200 text-base">
                                        <i class="fas fa-graduation-cap mr-4 text-lg"></i>
                                        <span>Courses</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('training.workshops') }}" class="flex items-center px-5 py-4 rounded-xl hover:bg-blue-50 text-gray-700 font-medium transition duration-200 text-base">
                                        <i class="fas fa-chalkboard-teacher mr-4 text-lg"></i>
                                        <span>Workshops</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('training.placements') }}" class="flex items-center px-5 py-4 rounded-xl hover:bg-blue-50 text-gray-700 font-medium transition duration-200 text-base">
                                        <i class="fas fa-user-tie mr-4 text-lg"></i>
                                        <span>Placed Students</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('training.achievements') }}" class="flex items-center px-5 py-4 rounded-xl bg-blue-50 text-[#00B7FF] font-medium text-base">
                                        <i class="fas fa-trophy mr-4 text-lg"></i>
                                        <span>Achievements</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('contact') }}" class="flex items-center px-5 py-4 rounded-xl hover:bg-blue-50 text-gray-700 font-medium transition duration-200 text-base">
                                        <i class="fas fa-envelope mr-4 text-lg"></i>
                                        <span>Contact Us</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <div class="p-6 bg-gray-50 border-t">
                            <div class="flex items-center">
                                <div class="mr-4 text-[#00B7FF] text-2xl">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500 mb-1">Have questions?</p>
                                    <p class="font-bold text-gray-800 text-lg">+91 98765 43210</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Main Content -->
                <div class="lg:w-3/4">
                    <!-- Institutional Awards -->
                    <div class="bg-white rounded-xl shadow-md p-8 mb-8">
                        <h2 class="text-2xl font-bold mb-6">Institutional Awards & Recognition</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-10">
                            <!-- Award 1 -->
                            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden hover:shadow-lg transition-all duration-300">
                                <div class="relative">
                                    <div class="h-48 bg-gradient-to-r from-yellow-400 to-amber-600 flex items-center justify-center">
                                        <i class="fas fa-award text-5xl text-white"></i>
                                    </div>
                                </div>
                                <div class="p-6">
                                    <div class="flex items-center justify-between mb-3">
                                        <span class="bg-yellow-100 text-yellow-700 text-xs font-medium px-2 py-1 rounded">National Recognition</span>
                                        <span class="text-gray-600 text-sm">2024</span>
                                    </div>
                                    <h3 class="text-xl font-bold mb-2">Best Training Institute of the Year</h3>
                                    <p class="text-gray-600 mb-4">
                                        Awarded by the National Education Excellence Awards for outstanding contribution to technical education and placement services.
                                    </p>
                                </div>
                            </div>
                            
                            <!-- Award 2 -->
                            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden hover:shadow-lg transition-all duration-300">
                                <div class="relative">
                                    <div class="h-48 bg-gradient-to-r from-blue-500 to-purple-600 flex items-center justify-center">
                                        <i class="fas fa-medal text-5xl text-white"></i>
                                    </div>
                                </div>
                                <div class="p-6">
                                    <div class="flex items-center justify-between mb-3">
                                        <span class="bg-blue-100 text-blue-700 text-xs font-medium px-2 py-1 rounded">Industry Partnership</span>
                                        <span class="text-gray-600 text-sm">2023</span>
                                    </div>
                                    <h3 class="text-xl font-bold mb-2">Excellence in Industry Collaboration</h3>
                                    <p class="text-gray-600 mb-4">
                                        Recognized for establishing strong industry partnerships and creating industry-aligned curriculum that bridges the skills gap.
                                    </p>
                                </div>
                            </div>
                            
                            <!-- Award 3 -->
                            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden hover:shadow-lg transition-all duration-300">
                                <div class="relative">
                                    <div class="h-48 bg-gradient-to-r from-green-500 to-teal-600 flex items-center justify-center">
                                        <i class="fas fa-star text-5xl text-white"></i>
                                    </div>
                                </div>
                                <div class="p-6">
                                    <div class="flex items-center justify-between mb-3">
                                        <span class="bg-green-100 text-green-700 text-xs font-medium px-2 py-1 rounded">Education Innovation</span>
                                        <span class="text-gray-600 text-sm">2023</span>
                                    </div>
                                    <h3 class="text-xl font-bold mb-2">Innovation in Technical Education</h3>
                                    <p class="text-gray-600 mb-4">
                                        Awarded for innovative teaching methods, practical training approaches, and effective use of technology in education.
                                    </p>
                                </div>
                            </div>
                            
                            <!-- Award 4 -->
                            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden hover:shadow-lg transition-all duration-300">
                                <div class="relative">
                                    <div class="h-48 bg-gradient-to-r from-red-500 to-pink-600 flex items-center justify-center">
                                        <i class="fas fa-users text-5xl text-white"></i>
                                    </div>
                                </div>
                                <div class="p-6">
                                    <div class="flex items-center justify-between mb-3">
                                        <span class="bg-red-100 text-red-700 text-xs font-medium px-2 py-1 rounded">Community Impact</span>
                                        <span class="text-gray-600 text-sm">2022</span>
                                    </div>
                                    <h3 class="text-xl font-bold mb-2">Community Development Award</h3>
                                    <p class="text-gray-600 mb-4">
                                        Recognized for contributing to community development through skill-building initiatives and free training programs for underprivileged students.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Student Achievements -->
                    <div class="bg-white rounded-xl shadow-md p-8 mb-8">
                        <h2 class="text-2xl font-bold mb-6">Student Achievements</h2>
                        
                        <div class="space-y-6">
                            <!-- Achievement Category 1 -->
                            <div>
                                <h3 class="text-xl font-semibold mb-4 flex items-center">
                                    <i class="fas fa-laptop-code text-[#00B7FF] mr-2"></i> 
                                    National & International Competitions
                                </h3>
                                <div class="border-l-4 border-[#00B7FF] pl-6 space-y-4">
                                    <div>
                                        <h4 class="font-medium text-gray-800">National Hackathon Champions - 2024</h4>
                                        <p class="text-gray-600">Team of 4 students won the first prize at the National Innovation Hackathon with their AI-powered healthcare solution.</p>
                                    </div>
                                    <div>
                                        <h4 class="font-medium text-gray-800">International Coding Competition - 2023</h4>
                                        <p class="text-gray-600">Two students secured 3rd place in the International Coding Challenge hosted by Microsoft.</p>
                                    </div>
                                    <div>
                                        <h4 class="font-medium text-gray-800">Google Solution Challenge Finalists - 2023</h4>
                                        <p class="text-gray-600">A team of students reached the finals of the Google Solution Challenge with their sustainable agriculture monitoring app.</p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Achievement Category 2 -->
                            <div>
                                <h3 class="text-xl font-semibold mb-4 flex items-center">
                                    <i class="fas fa-certificate text-[#00B7FF] mr-2"></i> 
                                    Certifications & Professional Achievements
                                </h3>
                                <div class="border-l-4 border-[#00B7FF] pl-6 space-y-4">
                                    <div>
                                        <h4 class="font-medium text-gray-800">AWS Certified Solutions Architect - Professional</h4>
                                        <p class="text-gray-600">15 students achieved this advanced certification with a 100% pass rate, compared to the global average of 72%.</p>
                                    </div>
                                    <div>
                                        <h4 class="font-medium text-gray-800">Google Cloud Professional Data Engineer</h4>
                                        <p class="text-gray-600">8 students completed this challenging certification program, with the highest scorer achieving a 95% mark.</p>
                                    </div>
                                    <div>
                                        <h4 class="font-medium text-gray-800">Microsoft Azure Administrator & Developer</h4>
                                        <p class="text-gray-600">23 students certified in various Microsoft Azure specializations, with 5 achieving perfect scores.</p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Achievement Category 3 -->
                            <div>
                                <h3 class="text-xl font-semibold mb-4 flex items-center">
                                    <i class="fas fa-lightbulb text-[#00B7FF] mr-2"></i> 
                                    Innovation & Research
                                </h3>
                                <div class="border-l-4 border-[#00B7FF] pl-6 space-y-4">
                                    <div>
                                        <h4 class="font-medium text-gray-800">Research Paper Publication</h4>
                                        <p class="text-gray-600">3 research papers published by students in international journals on topics including AI, machine learning, and IoT.</p>
                                    </div>
                                    <div>
                                        <h4 class="font-medium text-gray-800">Patent Filings</h4>
                                        <p class="text-gray-600">2 patents filed for innovative solutions developed during capstone projects in collaboration with industry partners.</p>
                                    </div>
                                    <div>
                                        <h4 class="font-medium text-gray-800">Open Source Contributions</h4>
                                        <p class="text-gray-600">Students contributed to over 12 major open-source projects, with 4 students becoming regular contributors to popular frameworks.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Media Coverage -->
                    <div class="bg-white rounded-xl border border-gray-100 p-8">
                        <h2 class="text-2xl font-bold mb-6">Media Coverage</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="p-6 bg-gray-50 rounded-xl hover:bg-gray-100 transition-all">
                                <div class="flex items-start">
                                    <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 mr-4">
                                        <i class="fas fa-newspaper"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-lg font-semibold mb-2">The Tech Times</h3>
                                        <p class="text-gray-600 mb-2">"Comestro: Transforming Technical Education Through Industry Partnerships"</p>
                                        <p class="text-sm text-gray-500">February 15, 2024</p>
                                    </div>
                                </div>
                            </div>
                            <div class="p-6 bg-gray-50 rounded-xl hover:bg-gray-100 transition-all">
                                <div class="flex items-start">
                                    <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center text-green-600 mr-4">
                                        <i class="fas fa-tv"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-lg font-semibold mb-2">Education Today</h3>
                                        <p class="text-gray-600 mb-2">"Inside Comestro's Industry-Leading Placement Program"</p>
                                        <p class="text-sm text-gray-500">January 20, 2024</p>
                                    </div>
                                </div>
                            </div>
                            <div class="p-6 bg-gray-50 rounded-xl hover:bg-gray-100 transition-all">
                                <div class="flex items-start">
                                    <div class="w-10 h-10 bg-red-100 rounded-full flex items-center justify-center text-red-600 mr-4">
                                        <i class="fas fa-video"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-lg font-semibold mb-2">TechEdu TV</h3>
                                        <p class="text-gray-600 mb-2">"Comestro Students Shine in International Coding Challenge"</p>
                                        <p class="text-sm text-gray-500">December 5, 2023</p>
                                    </div>
                                </div>
                            </div>
                            <div class="p-6 bg-gray-50 rounded-xl hover:bg-gray-100 transition-all">
                                <div class="flex items-start">
                                    <div class="w-10 h-10 bg-purple-100 rounded-full flex items-center justify-center text-purple-600 mr-4">
                                        <i class="fas fa-globe"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-lg font-semibold mb-2">Digital News Network</h3>
                                        <p class="text-gray-600 mb-2">"How Comestro is Bridging the Industry-Academia Gap"</p>
                                        <p class="text-sm text-gray-500">November 12, 2023</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Recognition Slider -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-[5%]">
            <h2 class="text-3xl font-bold text-center mb-10">Our Partners & Affiliations</h2>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 gap-6">
                <div class="h-24 bg-white rounded-xl flex items-center justify-center p-4 shadow-sm">
                    <div class="text-2xl font-bold text-gray-400">Partner 1</div>
                </div>
                <div class="h-24 bg-white rounded-xl flex items-center justify-center p-4 shadow-sm">
                    <div class="text-2xl font-bold text-gray-400">Partner 2</div>
                </div>
                <div class="h-24 bg-white rounded-xl flex items-center justify-center p-4 shadow-sm">
                    <div class="text-2xl font-bold text-gray-400">Partner 3</div>
                </div>
                <div class="h-24 bg-white rounded-xl flex items-center justify-center p-4 shadow-sm">
                    <div class="text-2xl font-bold text-gray-400">Partner 4</div>
                </div>
                <div class="h-24 bg-white rounded-xl flex items-center justify-center p-4 shadow-sm">
                    <div class="text-2xl font-bold text-gray-400">Partner 5</div>
                </div>
                <div class="h-24 bg-white rounded-xl flex items-center justify-center p-4 shadow-sm">
                    <div class="text-2xl font-bold text-gray-400">Partner 6</div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- CTA -->
    <section class="py-16 bg-gradient-to-r from-[#00B7FF] to-[#0099CC] text-white">
        <div class="container mx-auto px-[5%] text-center">
            <h2 class="text-3xl font-bold mb-6">Join Our Award-Winning Training Programs</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">
                Be part of our success story and build a promising career with our industry-recognized training programs.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="{{ route('training.courses') }}" class="px-8 py-3 bg-white text-[#00B7FF] font-semibold rounded-full transition duration-300">
                    Explore Courses
                </a>
                <a href="{{ route('contact') }}" class="px-8 py-3 bg-transparent border-2 border-white text-white font-semibold rounded-full hover:bg-white hover:text-[#00B7FF] transition duration-300">
                    Contact Us
                </a>
            </div>
        </div>
    </section>
@endsection