@extends('layouts.app')

@section('title', 'Training Workshops')

@section('content')
    <!-- Page Header -->
    <section class="page-header">
        <div class="container mx-auto px-[5%]">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Training <span class="text-[#00B7FF]">Workshops</span></h1>
            <p class="text-xl text-gray-200 max-w-3xl mx-auto">Intensive workshops for hands-on learning experiences and skill building.</p>
        </div>
    </section>
    
    <!-- Training Navigation and Content -->
    <div class="bg-white">
        <div class="container mx-auto px-[5%] md:px-[5%] py-8">
            <div class="flex flex-col lg:flex-row gap-8">
                <!-- Sidebar Navigation -->
                <div class="lg:w-1/4">
                    <div class="sticky top-24 bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100">
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
                                    <a href="{{ route('training.workshops') }}" class="flex items-center px-5 py-4 rounded-xl bg-blue-50 text-[#00B7FF] font-medium text-base">
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
                    <div class="bg-white rounded-xl shadow-md p-8 mb-8">
                        <h2 class="text-2xl font-bold mb-6">Upcoming Workshops</h2>
                        <p class="text-gray-600 mb-8">
                            Our industry-focused workshops are designed to provide intensive, hands-on training on specific technologies and skills. Led by industry experts, these workshops offer practical knowledge that you can immediately apply in real-world scenarios.
                        </p>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-10">
                            <!-- Workshop 1 -->
                            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden hover:shadow-lg transition-all duration-300">
                                <div class="relative">
                                    <div class="h-48 bg-gradient-to-r from-blue-500 to-indigo-600 flex items-center justify-center">
                                        <i class="fas fa-code text-5xl text-white"></i>
                                    </div>
                                    <div class="absolute top-4 right-4 bg-yellow-500 text-white text-xs font-bold px-3 py-1 rounded-full">
                                        Limited Seats
                                    </div>
                                </div>
                                <div class="p-6">
                                    <div class="flex items-center justify-between mb-3">
                                        <span class="bg-blue-100 text-blue-700 text-xs font-medium px-2 py-1 rounded">3-Day Workshop</span>
                                        <span class="text-gray-600 text-sm">Oct 10-12, 2025</span>
                                    </div>
                                    <h3 class="text-xl font-bold mb-2">Advanced JavaScript & React</h3>
                                    <p class="text-gray-600 mb-4">
                                        Deep dive into advanced JavaScript concepts and React best practices. Learn state management, hooks, context API, and performance optimization techniques.
                                    </p>
                                    <div class="flex items-center mb-4">
                                        <img src="https://randomuser.me/api/portraits/men/85.jpg" alt="Instructor" class="w-10 h-10 rounded-full mr-3">
                                        <div>
                                            <p class="font-medium text-gray-800">Rahul Sharma</p>
                                            <p class="text-sm text-gray-500">Senior Frontend Developer</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <span class="font-bold text-gray-800">₹4,999</span>
                                        <a href="{{ route('contact') }}" class="px-4 py-2 bg-[#00B7FF] text-white rounded-lg hover:bg-blue-600 transition duration-200">Register Now</a>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Workshop 2 -->
                            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden hover:shadow-lg transition-all duration-300">
                                <div class="relative">
                                    <div class="h-48 bg-gradient-to-r from-green-500 to-teal-600 flex items-center justify-center">
                                        <i class="fas fa-shield-alt text-5xl text-white"></i>
                                    </div>
                                    <div class="absolute top-4 right-4 bg-red-500 text-white text-xs font-bold px-3 py-1 rounded-full">
                                        Trending
                                    </div>
                                </div>
                                <div class="p-6">
                                    <div class="flex items-center justify-between mb-3">
                                        <span class="bg-green-100 text-green-700 text-xs font-medium px-2 py-1 rounded">2-Day Workshop</span>
                                        <span class="text-gray-600 text-sm">Oct 18-19, 2025</span>
                                    </div>
                                    <h3 class="text-xl font-bold mb-2">Cybersecurity Essentials</h3>
                                    <p class="text-gray-600 mb-4">
                                        Learn crucial cybersecurity concepts and practices. Covers threat detection, vulnerability assessment, encryption, and secure coding practices.
                                    </p>
                                    <div class="flex items-center mb-4">
                                        <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Instructor" class="w-10 h-10 rounded-full mr-3">
                                        <div>
                                            <p class="font-medium text-gray-800">Priya Patel</p>
                                            <p class="text-sm text-gray-500">Security Consultant</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <span class="font-bold text-gray-800">₹3,999</span>
                                        <a href="{{ route('contact') }}" class="px-4 py-2 bg-[#00B7FF] text-white rounded-lg hover:bg-blue-600 transition duration-200">Register Now</a>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Workshop 3 -->
                            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden hover:shadow-lg transition-all duration-300">
                                <div class="relative">
                                    <div class="h-48 bg-gradient-to-r from-purple-500 to-pink-600 flex items-center justify-center">
                                        <i class="fas fa-database text-5xl text-white"></i>
                                    </div>
                                </div>
                                <div class="p-6">
                                    <div class="flex items-center justify-between mb-3">
                                        <span class="bg-purple-100 text-purple-700 text-xs font-medium px-2 py-1 rounded">1-Day Workshop</span>
                                        <span class="text-gray-600 text-sm">Oct 25, 2025</span>
                                    </div>
                                    <h3 class="text-xl font-bold mb-2">SQL & NoSQL Databases</h3>
                                    <p class="text-gray-600 mb-4">
                                        Compare SQL and NoSQL databases and learn when to use each. Covers MySQL, PostgreSQL, MongoDB, and Redis with practical examples.
                                    </p>
                                    <div class="flex items-center mb-4">
                                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Instructor" class="w-10 h-10 rounded-full mr-3">
                                        <div>
                                            <p class="font-medium text-gray-800">Vikram Desai</p>
                                            <p class="text-sm text-gray-500">Database Architect</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <span class="font-bold text-gray-800">₹2,499</span>
                                        <a href="{{ route('contact') }}" class="px-4 py-2 bg-[#00B7FF] text-white rounded-lg hover:bg-blue-600 transition duration-200">Register Now</a>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Workshop 4 -->
                            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden hover:shadow-lg transition-all duration-300">
                                <div class="relative">
                                    <div class="h-48 bg-gradient-to-r from-yellow-500 to-orange-600 flex items-center justify-center">
                                        <i class="fas fa-cloud text-5xl text-white"></i>
                                    </div>
                                </div>
                                <div class="p-6">
                                    <div class="flex items-center justify-between mb-3">
                                        <span class="bg-yellow-100 text-yellow-700 text-xs font-medium px-2 py-1 rounded">2-Day Workshop</span>
                                        <span class="text-gray-600 text-sm">Nov 8-9, 2025</span>
                                    </div>
                                    <h3 class="text-xl font-bold mb-2">AWS Cloud Architecture</h3>
                                    <p class="text-gray-600 mb-4">
                                        Learn to design, deploy and manage applications on AWS. Covers EC2, S3, Lambda, RDS, and best practices for secure and scalable cloud architecture.
                                    </p>
                                    <div class="flex items-center mb-4">
                                        <img src="https://randomuser.me/api/portraits/women/45.jpg" alt="Instructor" class="w-10 h-10 rounded-full mr-3">
                                        <div>
                                            <p class="font-medium text-gray-800">Ananya Singh</p>
                                            <p class="text-sm text-gray-500">AWS Solutions Architect</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <span class="font-bold text-gray-800">₹3,999</span>
                                        <a href="{{ route('contact') }}" class="px-4 py-2 bg-[#00B7FF] text-white rounded-lg hover:bg-blue-600 transition duration-200">Register Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-10 text-center">
                            <a href="#more-workshops" class="inline-block px-8 py-3 bg-gray-100 text-gray-700 rounded-full hover:bg-gray-200 transition duration-300">
                                View All Workshops <i class="fas fa-chevron-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Workshop Benefits -->
                    <div class="bg-white rounded-xl shadow-md p-8">
                        <h2 class="text-2xl font-bold mb-6">Why Attend Our Workshops?</h2>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <div class="p-6 bg-blue-50 rounded-xl">
                                <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 mb-4">
                                    <i class="fas fa-user-tie text-xl"></i>
                                </div>
                                <h3 class="text-lg font-semibold mb-2">Industry Experts</h3>
                                <p class="text-gray-600">Learn directly from professionals with extensive experience in their respective fields.</p>
                            </div>
                            <div class="p-6 bg-green-50 rounded-xl">
                                <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center text-green-600 mb-4">
                                    <i class="fas fa-laptop-code text-xl"></i>
                                </div>
                                <h3 class="text-lg font-semibold mb-2">Hands-on Practice</h3>
                                <p class="text-gray-600">Work on real projects and gain practical experience that you can add to your portfolio.</p>
                            </div>
                            <div class="p-6 bg-purple-50 rounded-xl">
                                <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center text-purple-600 mb-4">
                                    <i class="fas fa-certificate text-xl"></i>
                                </div>
                                <h3 class="text-lg font-semibold mb-2">Certification</h3>
                                <p class="text-gray-600">Receive a certificate of completion that adds value to your professional profile.</p>
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
            <h2 class="text-3xl font-bold mb-6">Ready to Enhance Your Skills?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">
                Join our upcoming workshops and gain hands-on experience with the latest technologies and tools.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="{{ route('contact') }}" class="px-8 py-3 bg-white text-[#00B7FF] font-semibold rounded-full hover:shadow-lg transition duration-300">
                    Register Now
                </a>
                <a href="#request-workshop" class="px-8 py-3 bg-transparent border-2 border-white text-white font-semibold rounded-full hover:bg-white hover:text-[#00B7FF] transition duration-300">
                    Request Custom Workshop
                </a>
            </div>
        </div>
    </section>
@endsection