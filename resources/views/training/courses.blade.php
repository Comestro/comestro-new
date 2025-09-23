@extends('layouts.app')

@section('title', 'Training Courses')

@section('content')
    <!-- Page Header -->
    <section class="page-header">
        <div class="container mx-auto px-[5%]">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Training <span class="text-[#00B7FF]">Courses</span></h1>
            <p class="text-xl text-gray-200 max-w-3xl mx-auto">Comprehensive technical courses designed for professional growth.</p>
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
                                    <a href="{{ route('training.courses') }}" class="flex items-center px-5 py-4 rounded-xl bg-blue-50 text-[#00B7FF] font-medium text-base">
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
                    <div class="bg-white rounded-xl border border-gray-100 p-8 mb-8">
                        <h2 class="text-2xl font-bold mb-6">Available Courses</h2>
                        <p class="text-gray-600 mb-8">
                            Our comprehensive course offerings are designed to provide you with the skills and knowledge needed to excel in today's competitive tech industry. Each course is carefully structured with a balance of theory and practical application, ensuring you graduate with job-ready skills.
                        </p>
                        
                        <div class="space-y-8">
                            <!-- Course 1 -->
                            <div class="border border-gray-200 rounded-xl overflow-hidden transition-all hover:shadow-lg">
                                <div class="grid grid-cols-1 md:grid-cols-3">
                                    <div class="bg-gradient-to-r from-blue-500 to-blue-600 p-6 flex flex-col justify-center items-center text-white">
                                        <i class="fab fa-react text-5xl mb-4"></i>
                                        <h3 class="text-xl font-bold">Full Stack Web Development</h3>
                                        <div class="mt-4 bg-blue-700/30 w-full text-center py-1 px-3 rounded-full">
                                            <span>12 Weeks</span>
                                        </div>
                                    </div>
                                    <div class="p-6 md:col-span-2">
                                        <div class="flex justify-between items-start mb-4">
                                            <div>
                                                <span class="bg-blue-100 text-blue-700 text-xs font-medium px-2 py-1 rounded">Best Seller</span>
                                                <span class="bg-green-100 text-green-700 text-xs font-medium px-2 py-1 rounded ml-2">Placement Assistance</span>
                                            </div>
                                            <div class="text-xl font-bold text-gray-800">₹35,000</div>
                                        </div>
                                        <p class="text-gray-600 mb-4">
                                            Master both frontend and backend technologies to become a versatile full-stack developer. This comprehensive course covers HTML, CSS, JavaScript, React, Node.js, Express, and MongoDB.
                                        </p>
                                        <div class="mb-4">
                                            <h4 class="font-semibold text-gray-800 mb-2">Key Learnings:</h4>
                                            <ul class="grid grid-cols-1 md:grid-cols-2 gap-2">
                                                <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i> Responsive Web Design</li>
                                                <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i> Frontend with React</li>
                                                <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i> Backend with Node.js</li>
                                                <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i> Database Integration</li>
                                                <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i> RESTful API Development</li>
                                                <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i> Authentication & Security</li>
                                            </ul>
                                        </div>
                                        <div class="flex justify-between items-center">
                                            <div class="flex items-center">
                                                <div class="flex text-yellow-400">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                </div>
                                                <span class="text-gray-600 ml-2">4.8 (320 reviews)</span>
                                            </div>
                                            <a href="{{ route('contact') }}" class="px-4 py-2 bg-[#00B7FF] text-white rounded-lg hover:bg-blue-600 transition duration-200">Enroll Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Course 2 -->
                            <div class="border border-gray-200 rounded-xl overflow-hidden transition-all hover:shadow-lg">
                                <div class="grid grid-cols-1 md:grid-cols-3">
                                    <div class="bg-gradient-to-r from-purple-500 to-purple-600 p-6 flex flex-col justify-center items-center text-white">
                                        <i class="fas fa-mobile-alt text-5xl mb-4"></i>
                                        <h3 class="text-xl font-bold">Mobile App Development</h3>
                                        <div class="mt-4 bg-purple-700/30 w-full text-center py-1 px-3 rounded-full">
                                            <span>10 Weeks</span>
                                        </div>
                                    </div>
                                    <div class="p-6 md:col-span-2">
                                        <div class="flex justify-between items-start mb-4">
                                            <div>
                                                <span class="bg-purple-100 text-purple-700 text-xs font-medium px-2 py-1 rounded">Trending</span>
                                                <span class="bg-green-100 text-green-700 text-xs font-medium px-2 py-1 rounded ml-2">Placement Assistance</span>
                                            </div>
                                            <div class="text-xl font-bold text-gray-800">₹32,000</div>
                                        </div>
                                        <p class="text-gray-600 mb-4">
                                            Learn to build native and cross-platform mobile applications for Android and iOS. This course covers React Native, Flutter, and native development with Java/Kotlin and Swift.
                                        </p>
                                        <div class="mb-4">
                                            <h4 class="font-semibold text-gray-800 mb-2">Key Learnings:</h4>
                                            <ul class="grid grid-cols-1 md:grid-cols-2 gap-2">
                                                <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i> UI/UX for Mobile Apps</li>
                                                <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i> React Native Development</li>
                                                <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i> Flutter Development</li>
                                                <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i> API Integration</li>
                                                <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i> App Store Deployment</li>
                                                <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i> Push Notifications</li>
                                            </ul>
                                        </div>
                                        <div class="flex justify-between items-center">
                                            <div class="flex items-center">
                                                <div class="flex text-yellow-400">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <span class="text-gray-600 ml-2">4.9 (250 reviews)</span>
                                            </div>
                                            <a href="{{ route('contact') }}" class="px-4 py-2 bg-[#00B7FF] text-white rounded-lg hover:bg-blue-600 transition duration-200">Enroll Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Course 3 -->
                            <div class="border border-gray-200 rounded-xl overflow-hidden transition-all hover:shadow-lg">
                                <div class="grid grid-cols-1 md:grid-cols-3">
                                    <div class="bg-gradient-to-r from-green-500 to-green-600 p-6 flex flex-col justify-center items-center text-white">
                                        <i class="fas fa-robot text-5xl mb-4"></i>
                                        <h3 class="text-xl font-bold">AI & Machine Learning</h3>
                                        <div class="mt-4 bg-green-700/30 w-full text-center py-1 px-3 rounded-full">
                                            <span>16 Weeks</span>
                                        </div>
                                    </div>
                                    <div class="p-6 md:col-span-2">
                                        <div class="flex justify-between items-start mb-4">
                                            <div>
                                                <span class="bg-green-100 text-green-700 text-xs font-medium px-2 py-1 rounded">Advanced</span>
                                                <span class="bg-blue-100 text-blue-700 text-xs font-medium px-2 py-1 rounded ml-2">High Demand</span>
                                            </div>
                                            <div class="text-xl font-bold text-gray-800">₹45,000</div>
                                        </div>
                                        <p class="text-gray-600 mb-4">
                                            Dive into the world of artificial intelligence and machine learning. Learn to build intelligent systems that can analyze data, make predictions, and automate decision-making processes.
                                        </p>
                                        <div class="mb-4">
                                            <h4 class="font-semibold text-gray-800 mb-2">Key Learnings:</h4>
                                            <ul class="grid grid-cols-1 md:grid-cols-2 gap-2">
                                                <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i> Python for Data Science</li>
                                                <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i> Statistical Analysis</li>
                                                <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i> Supervised Learning</li>
                                                <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i> Neural Networks</li>
                                                <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i> Deep Learning</li>
                                                <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i> Model Deployment</li>
                                            </ul>
                                        </div>
                                        <div class="flex justify-between items-center">
                                            <div class="flex items-center">
                                                <div class="flex text-yellow-400">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <span class="text-gray-600 ml-2">4.7 (185 reviews)</span>
                                            </div>
                                            <a href="{{ route('contact') }}" class="px-4 py-2 bg-[#00B7FF] text-white rounded-lg hover:bg-blue-600 transition duration-200">Enroll Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-10 text-center">
                            <a href="#more-courses" class="inline-block px-8 py-3 bg-gray-100 text-gray-700 rounded-full hover:bg-gray-200 transition duration-300">
                                View All Courses <i class="fas fa-chevron-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Course Calendar -->
                    <div class="bg-white rounded-xl border border-gray-100 p-8">
                        <h2 class="text-2xl font-bold mb-6">Upcoming Batches</h2>
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Course Name</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Start Date</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Duration</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Mode</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                        <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm font-medium text-gray-900">Full Stack Web Development</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-500">Oct 15, 2025</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-500">12 Weeks</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-500">Online/Offline</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                Enrolling
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <a href="{{ route('contact') }}" class="text-[#00B7FF] hover:text-blue-800">Apply</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm font-medium text-gray-900">Mobile App Development</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-500">Nov 05, 2025</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-500">10 Weeks</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-500">Online</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                Enrolling
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <a href="{{ route('contact') }}" class="text-[#00B7FF] hover:text-blue-800">Apply</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm font-medium text-gray-900">AI & Machine Learning</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-500">Dec 10, 2025</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-500">16 Weeks</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-500">Offline</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                                Filling Fast
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <a href="{{ route('contact') }}" class="text-[#00B7FF] hover:text-blue-800">Apply</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- CTA -->
    <section class="py-16 bg-gradient-to-r from-[#00B7FF] to-[#0099CC] text-white">
        <div class="container mx-auto px-[5%] text-center">
            <h2 class="text-3xl font-bold mb-6">Ready to Start Your Tech Journey?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">
                Join thousands of students who have successfully launched their careers with our training programs.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="{{ route('contact') }}" class="px-8 py-3 bg-white text-[#00B7FF] font-semibold rounded-full transition duration-300">
                    Apply Now
                </a>
                <a href="#download-curriculum" class="px-8 py-3 bg-transparent border-2 border-white text-white font-semibold rounded-full hover:bg-white hover:text-[#00B7FF] transition duration-300">
                    Download Curriculum
                </a>
            </div>
        </div>
    </section>
@endsection