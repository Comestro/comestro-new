@extends('layouts.app')

@section('title', 'Placed Students')

@section('content')
    <!-- Page Header -->
    <section class="page-header">
        <div class="container mx-auto px-[5%]">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Placed <span class="text-[#00B7FF]">Students</span></h1>
            <p class="text-xl text-gray-200 max-w-3xl mx-auto">Our successful students who have secured job placements across various industries.</p>
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
                                    <a href="{{ route('training.placements') }}" class="flex items-center px-5 py-4 rounded-xl bg-blue-50 text-[#00B7FF] font-medium text-base">
                                        <i class="fas fa-user-tie mr-4 text-lg"></i>
                                        <span>Placed Students</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('training.achievements') }}" class="flex items-center px-5 py-4 rounded-xl hover:bg-blue-50 text-gray-700 font-medium transition duration-200 text-base">
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
                    <!-- Placement Stats -->
                    <div class="bg-white rounded-xl shadow-md p-8 mb-8">
                        <h2 class="text-2xl font-bold mb-6">Placement Highlights</h2>
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 mb-8">
                            <div class="bg-blue-50 rounded-xl p-6 text-center">
                                <div class="text-4xl font-bold text-[#00B7FF] mb-2">95%</div>
                                <p class="text-gray-600">Placement Rate</p>
                            </div>
                            <div class="bg-green-50 rounded-xl p-6 text-center">
                                <div class="text-4xl font-bold text-green-600 mb-2">250+</div>
                                <p class="text-gray-600">Students Placed</p>
                            </div>
                            <div class="bg-yellow-50 rounded-xl p-6 text-center">
                                <div class="text-4xl font-bold text-yellow-600 mb-2">75+</div>
                                <p class="text-gray-600">Partner Companies</p>
                            </div>
                            <div class="bg-purple-50 rounded-xl p-6 text-center">
                                <div class="text-4xl font-bold text-purple-600 mb-2">₹12L</div>
                                <p class="text-gray-600">Highest Package</p>
                            </div>
                        </div>
                        
                        <!-- Top Recruiters -->
                        <h3 class="text-xl font-bold mb-4">Top Recruiters</h3>
                        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-6 mb-8">
                            <div class="flex items-center justify-center h-24 bg-gray-50 rounded-lg p-4">
                                <div class="text-3xl text-gray-400 font-bold">Company 1</div>
                            </div>
                            <div class="flex items-center justify-center h-24 bg-gray-50 rounded-lg p-4">
                                <div class="text-3xl text-gray-400 font-bold">Company 2</div>
                            </div>
                            <div class="flex items-center justify-center h-24 bg-gray-50 rounded-lg p-4">
                                <div class="text-3xl text-gray-400 font-bold">Company 3</div>
                            </div>
                            <div class="flex items-center justify-center h-24 bg-gray-50 rounded-lg p-4">
                                <div class="text-3xl text-gray-400 font-bold">Company 4</div>
                            </div>
                            <div class="flex items-center justify-center h-24 bg-gray-50 rounded-lg p-4">
                                <div class="text-3xl text-gray-400 font-bold">Company 5</div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Success Stories -->
                    <div class="bg-white rounded-xl shadow-md p-8 mb-8">
                        <div class="flex justify-between items-center mb-6">
                            <h2 class="text-2xl font-bold">Success Stories</h2>
                            <div>
                                <select id="placement-year" class="border rounded-lg px-4 py-2 text-sm text-gray-700">
                                    <option>Latest Placements</option>
                                    <option>2024 Batch</option>
                                    <option>2023 Batch</option>
                                    <option>2022 Batch</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <!-- Student 1 -->
                            <div class="bg-white border border-gray-200 rounded-xl overflow-hidden hover:shadow-lg transition-all duration-300">
                                <div class="flex flex-col sm:flex-row">
                                    <div class="sm:w-1/3">
                                        <div class="h-full bg-gradient-to-br from-blue-500 to-purple-600 flex items-center justify-center p-6">
                                            <img src="https://randomuser.me/api/portraits/women/12.jpg" alt="Student" class="w-24 h-24 rounded-full border-4 border-white">
                                        </div>
                                    </div>
                                    <div class="sm:w-2/3 p-6">
                                        <div class="flex justify-between items-start">
                                            <h3 class="text-xl font-bold mb-1">Anjali Gupta</h3>
                                            <div class="bg-blue-100 text-blue-700 text-xs font-medium px-2 py-1 rounded">2024 Batch</div>
                                        </div>
                                        <div class="flex items-center mb-3">
                                            <i class="fas fa-building text-gray-500 mr-2"></i>
                                            <span class="text-gray-700">Software Developer at Tech Solutions</span>
                                        </div>
                                        <p class="text-gray-600 mb-3">
                                            "The practical training and industry-focused curriculum at Comestro helped me develop the skills I needed to succeed in my technical interviews."
                                        </p>
                                        <div class="flex items-center text-gray-500 text-sm">
                                            <span class="mr-4"><i class="fas fa-code mr-1"></i> Full Stack Development</span>
                                            <span><i class="fas fa-rupee-sign mr-1"></i> 8.5 LPA</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Student 2 -->
                            <div class="bg-white border border-gray-200 rounded-xl overflow-hidden hover:shadow-lg transition-all duration-300">
                                <div class="flex flex-col sm:flex-row">
                                    <div class="sm:w-1/3">
                                        <div class="h-full bg-gradient-to-br from-green-500 to-teal-600 flex items-center justify-center p-6">
                                            <img src="https://randomuser.me/api/portraits/men/54.jpg" alt="Student" class="w-24 h-24 rounded-full border-4 border-white">
                                        </div>
                                    </div>
                                    <div class="sm:w-2/3 p-6">
                                        <div class="flex justify-between items-start">
                                            <h3 class="text-xl font-bold mb-1">Arjun Singh</h3>
                                            <div class="bg-green-100 text-green-700 text-xs font-medium px-2 py-1 rounded">2024 Batch</div>
                                        </div>
                                        <div class="flex items-center mb-3">
                                            <i class="fas fa-building text-gray-500 mr-2"></i>
                                            <span class="text-gray-700">Frontend Developer at InnovateTech</span>
                                        </div>
                                        <p class="text-gray-600 mb-3">
                                            "The mentors at Comestro guided me through every step of my journey, from learning the basics to mastering advanced concepts."
                                        </p>
                                        <div class="flex items-center text-gray-500 text-sm">
                                            <span class="mr-4"><i class="fas fa-code mr-1"></i> UI/UX & React</span>
                                            <span><i class="fas fa-rupee-sign mr-1"></i> 9.2 LPA</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Student 3 -->
                            <div class="bg-white border border-gray-200 rounded-xl overflow-hidden hover:shadow-lg transition-all duration-300">
                                <div class="flex flex-col sm:flex-row">
                                    <div class="sm:w-1/3">
                                        <div class="h-full bg-gradient-to-br from-yellow-500 to-orange-600 flex items-center justify-center p-6">
                                            <img src="https://randomuser.me/api/portraits/women/33.jpg" alt="Student" class="w-24 h-24 rounded-full border-4 border-white">
                                        </div>
                                    </div>
                                    <div class="sm:w-2/3 p-6">
                                        <div class="flex justify-between items-start">
                                            <h3 class="text-xl font-bold mb-1">Priya Patel</h3>
                                            <div class="bg-yellow-100 text-yellow-700 text-xs font-medium px-2 py-1 rounded">2023 Batch</div>
                                        </div>
                                        <div class="flex items-center mb-3">
                                            <i class="fas fa-building text-gray-500 mr-2"></i>
                                            <span class="text-gray-700">Data Analyst at Global Analytics</span>
                                        </div>
                                        <p class="text-gray-600 mb-3">
                                            "The specialized data science training program gave me the edge I needed to stand out in the competitive job market."
                                        </p>
                                        <div class="flex items-center text-gray-500 text-sm">
                                            <span class="mr-4"><i class="fas fa-database mr-1"></i> Data Science</span>
                                            <span><i class="fas fa-rupee-sign mr-1"></i> 10.5 LPA</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Student 4 -->
                            <div class="bg-white border border-gray-200 rounded-xl overflow-hidden hover:shadow-lg transition-all duration-300">
                                <div class="flex flex-col sm:flex-row">
                                    <div class="sm:w-1/3">
                                        <div class="h-full bg-gradient-to-br from-purple-500 to-indigo-600 flex items-center justify-center p-6">
                                            <img src="https://randomuser.me/api/portraits/men/28.jpg" alt="Student" class="w-24 h-24 rounded-full border-4 border-white">
                                        </div>
                                    </div>
                                    <div class="sm:w-2/3 p-6">
                                        <div class="flex justify-between items-start">
                                            <h3 class="text-xl font-bold mb-1">Vikram Sharma</h3>
                                            <div class="bg-purple-100 text-purple-700 text-xs font-medium px-2 py-1 rounded">2023 Batch</div>
                                        </div>
                                        <div class="flex items-center mb-3">
                                            <i class="fas fa-building text-gray-500 mr-2"></i>
                                            <span class="text-gray-700">Cloud Engineer at CloudTech Solutions</span>
                                        </div>
                                        <p class="text-gray-600 mb-3">
                                            "The AWS certification training and hands-on cloud projects prepared me well for the challenges of cloud engineering."
                                        </p>
                                        <div class="flex items-center text-gray-500 text-sm">
                                            <span class="mr-4"><i class="fas fa-cloud mr-1"></i> Cloud Computing</span>
                                            <span><i class="fas fa-rupee-sign mr-1"></i> 12 LPA</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-8 text-center">
                            <a href="#more-stories" class="inline-block px-8 py-3 bg-gray-100 text-gray-700 rounded-full hover:bg-gray-200 transition duration-300">
                                Load More Success Stories <i class="fas fa-chevron-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Placement Process -->
                    <div class="bg-white rounded-xl border border-gray-100 p-8">
                        <h2 class="text-2xl font-bold mb-6">Our Placement Process</h2>
                        <div class="flex flex-col gap-4">
                            <div class="flex">
                                <div class="flex-shrink-0 w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 mr-4">
                                    <span class="font-bold">1</span>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold mb-2">Training & Skill Development</h3>
                                    <p class="text-gray-600 mb-2">Industry-focused training to develop technical and soft skills required by employers.</p>
                                </div>
                            </div>
                            
                            <div class="flex">
                                <div class="flex-shrink-0 w-12 h-12 rounded-full bg-green-100 flex items-center justify-center text-green-600 mr-4">
                                    <span class="font-bold">2</span>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold mb-2">Mock Interviews & Resume Building</h3>
                                    <p class="text-gray-600 mb-2">Comprehensive preparation for technical interviews and professional resume development.</p>
                                </div>
                            </div>
                            
                            <div class="flex">
                                <div class="flex-shrink-0 w-12 h-12 rounded-full bg-yellow-100 flex items-center justify-center text-yellow-600 mr-4">
                                    <span class="font-bold">3</span>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold mb-2">Campus Recruitment Drives</h3>
                                    <p class="text-gray-600 mb-2">Regular recruitment drives with our industry partners to provide placement opportunities.</p>
                                </div>
                            </div>
                            
                            <div class="flex">
                                <div class="flex-shrink-0 w-12 h-12 rounded-full bg-purple-100 flex items-center justify-center text-purple-600 mr-4">
                                    <span class="font-bold">4</span>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold mb-2">Post-Placement Support</h3>
                                    <p class="text-gray-600 mb-2">Continued guidance during the transition from training to employment.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- CTA -->
    <section class="py-16 bg-gradient-to-r from-[#00B7FF] to-[#0099CC] text-white">
        <div class="container mx-auto px-[5%] text-center">
            <h2 class="text-3xl font-bold mb-6">Ready to Launch Your Career?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">
                Join our training programs and take the first step towards a successful career in technology.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="{{ route('training.courses') }}" class="px-8 py-3 bg-white text-[#00B7FF] font-semibold rounded-full hover:shadow-lg transition duration-300">
                    Explore Courses
                </a>
                <a href="{{ route('contact') }}" class="px-8 py-3 bg-transparent border-2 border-white text-white font-semibold rounded-full hover:bg-white hover:text-[#00B7FF] transition duration-300">
                    Contact Us
                </a>
            </div>
        </div>
    </section>
@endsection