@extends('layouts.app')

@section('title', 'Training Programs')

@section('content')
    <!-- Page Header -->
    <section class="page-header">
        <div class="container mx-auto px-[10%]">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Training <span class="text-[#00B7FF]">Programs</span></h1>
            <p class="text-xl text-gray-200 max-w-3xl mx-auto">Industry-ready coding programs designed for students to excel in their careers.</p>
        </div>
    </section>

    <!-- Training Overview -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-[10%]">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold">Why Choose <span class="text-[#00B7FF]">Comestro Training?</span></h2>
                <p class="text-gray-600 mt-4 max-w-3xl mx-auto">We combine theoretical knowledge with practical skills to ensure you're ready for the real-world challenges in the tech industry.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-gray-50 p-8 rounded-xl text-center hover:shadow-lg transition duration-300">
                    <div class="w-16 h-16 bg-[#f1f8ff] rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-laptop-code text-[#00B7FF] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Hands-on Projects</h3>
                    <p class="text-gray-600">
                        Apply your knowledge by working on real-world projects that simulate industry scenarios and challenges.
                    </p>
                </div>
                
                <!-- Feature 2 -->
                <div class="bg-gray-50 p-8 rounded-xl text-center hover:shadow-lg transition duration-300">
                    <div class="w-16 h-16 bg-[#f1f8ff] rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-chalkboard-teacher text-[#00B7FF] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Industry Experts</h3>
                    <p class="text-gray-600">
                        Learn from professional developers with years of experience in leading technology companies.
                    </p>
                </div>
                
                <!-- Feature 3 -->
                <div class="bg-gray-50 p-8 rounded-xl text-center hover:shadow-lg transition duration-300">
                    <div class="w-16 h-16 bg-[#f1f8ff] rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-certificate text-[#00B7FF] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Certification</h3>
                    <p class="text-gray-600">
                        Receive industry-recognized certifications upon completion to boost your resume and job prospects.
                    </p>
                </div>
                
                <!-- Feature 4 -->
                <div class="bg-gray-50 p-8 rounded-xl text-center hover:shadow-lg transition duration-300">
                    <div class="w-16 h-16 bg-[#f1f8ff] rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-users text-[#00B7FF] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Small Batch Sizes</h3>
                    <p class="text-gray-600">
                        Limited students per batch ensures personalized attention and better learning outcomes.
                    </p>
                </div>
                
                <!-- Feature 5 -->
                <div class="bg-gray-50 p-8 rounded-xl text-center hover:shadow-lg transition duration-300">
                    <div class="w-16 h-16 bg-[#f1f8ff] rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-briefcase text-[#00B7FF] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Placement Assistance</h3>
                    <p class="text-gray-600">
                        Get support in resume building, interview preparation, and job placement opportunities.
                    </p>
                </div>
                
                <!-- Feature 6 -->
                <div class="bg-gray-50 p-8 rounded-xl text-center hover:shadow-lg transition duration-300">
                    <div class="w-16 h-16 bg-[#f1f8ff] rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-code-branch text-[#00B7FF] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Updated Curriculum</h3>
                    <p class="text-gray-600">
                        Curriculum regularly updated to include the latest technologies and industry trends.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Programs Section -->
    <section class="py-16 bg-gradient-to-b from-white to-[#f8f9fa]">
        <div class="container mx-auto px-[10%]">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold">Our Training <span class="text-[#00B7FF]">Programs</span></h2>
                <p class="text-gray-600 mt-4 max-w-3xl mx-auto">Comprehensive courses designed to meet the needs of different student profiles</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- BCA Students -->
                <div id="bca-details" class="bg-white rounded-[15px] p-8 text-left transition-all duration-300 hover:-translate-y-[10px] hover:shadow-[0_15px_30px_rgba(0,0,0,0.1)] border border-gray-100">
                    <div class="w-[60px] h-[60px] bg-[#f1f8ff] rounded-[15px] flex justify-center items-center mb-6 shadow-sm">
                        <i class="fas fa-laptop-code text-[#00B7FF] text-[28px]"></i>
                    </div>
                    <h3 class="text-[1.3rem] font-semibold mb-4 text-gray-800">BCA Students</h3>
                    <p class="text-[#666] mb-5 leading-[1.7]">Specialized programming foundation for Bachelor of Computer Applications students.</p>
                    <div class="flex justify-between mb-5 text-[#777] bg-gray-50 p-3 rounded-lg">
                        <span class="flex items-center"><i class="far fa-clock mr-2 text-[#00B7FF]"></i> 4 months</span>
                        <span class="flex items-center"><i class="fas fa-signal mr-2 text-[#00B7FF]"></i> Basic</span>
                    </div>
                    
                    <h4 class="text-lg font-semibold mb-3">What You'll Learn:</h4>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#00B7FF] mt-1 mr-3"></i>
                            <span>Programming fundamentals with Java, Python</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#00B7FF] mt-1 mr-3"></i>
                            <span>Basic web development (HTML, CSS, JavaScript)</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#00B7FF] mt-1 mr-3"></i>
                            <span>Database management with MySQL</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#00B7FF] mt-1 mr-3"></i>
                            <span>Software development life cycle</span>
                        </li>
                    </ul>
                    
                    <div class="flex justify-between text-[#777] mt-8">
                        <span class="font-semibold text-gray-800">Fee: ₹25,000</span>
                        <a href="{{ route('contact') }}" class="text-[#00B7FF] font-medium hover:underline">Apply Now</a>
                    </div>
                </div>
                
                <!-- B.Tech Students -->
                <div id="btech-details" class="bg-white rounded-[15px] p-8 text-left transition-all duration-300 hover:-translate-y-[10px] hover:shadow-[0_15px_30px_rgba(0,0,0,0.1)] border border-gray-100">
                    <div class="w-[60px] h-[60px] bg-[#f1f8ff] rounded-[15px] flex justify-center items-center mb-6 shadow-sm">
                        <i class="fas fa-cogs text-[#00B7FF] text-[28px]"></i>
                    </div>
                    <h3 class="text-[1.3rem] font-semibold mb-4 text-gray-800">B.Tech Students</h3>
                    <p class="text-[#666] mb-5 leading-[1.7]">Advanced software engineering concepts for engineering students.</p>
                    <div class="flex justify-between mb-5 text-[#777] bg-gray-50 p-3 rounded-lg">
                        <span class="flex items-center"><i class="far fa-clock mr-2 text-[#00B7FF]"></i> 6 Months</span>
                        <span class="flex items-center"><i class="fas fa-signal mr-2 text-[#00B7FF]"></i> Intermediate</span>
                    </div>
                    
                    <h4 class="text-lg font-semibold mb-3">What You'll Learn:</h4>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#00B7FF] mt-1 mr-3"></i>
                            <span>Full-stack development (MERN stack)</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#00B7FF] mt-1 mr-3"></i>
                            <span>Data structures and algorithms</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#00B7FF] mt-1 mr-3"></i>
                            <span>Cloud computing and DevOps basics</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#00B7FF] mt-1 mr-3"></i>
                            <span>Industry-oriented mini projects</span>
                        </li>
                    </ul>
                    
                    <div class="flex justify-between text-[#777] mt-8">
                        <span class="font-semibold text-gray-800">Fee: ₹35,000</span>
                        <a href="{{ route('contact') }}" class="text-[#00B7FF] font-medium hover:underline">Apply Now</a>
                    </div>
                </div>
                
                <!-- MCA Students -->
                <div id="mca-details" class="bg-white rounded-[15px] p-8 text-left transition-all duration-300 hover:-translate-y-[10px] hover:shadow-[0_15px_30px_rgba(0,0,0,0.1)] border border-gray-100">
                    <div class="w-[60px] h-[60px] bg-[#f1f8ff] rounded-[15px] flex justify-center items-center mb-6 shadow-sm">
                        <i class="fas fa-graduation-cap text-[#00B7FF] text-[28px]"></i>
                    </div>
                    <h3 class="text-[1.3rem] font-semibold mb-4 text-gray-800">MCA Students</h3>
                    <p class="text-[#666] mb-5 leading-[1.7]">Project management skills for Master of Computer Applications students.</p>
                    <div class="flex justify-between mb-5 text-[#777] bg-gray-50 p-3 rounded-lg">
                        <span class="flex items-center"><i class="far fa-clock mr-2 text-[#00B7FF]"></i> 3 Months</span>
                        <span class="flex items-center"><i class="fas fa-signal mr-2 text-[#00B7FF]"></i> Advanced</span>
                    </div>
                    
                    <h4 class="text-lg font-semibold mb-3">What You'll Learn:</h4>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#00B7FF] mt-1 mr-3"></i>
                            <span>Enterprise software architecture</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#00B7FF] mt-1 mr-3"></i>
                            <span>Agile project management</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#00B7FF] mt-1 mr-3"></i>
                            <span>System design and optimization</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#00B7FF] mt-1 mr-3"></i>
                            <span>Team leadership and client management</span>
                        </li>
                    </ul>
                    
                    <div class="flex justify-between text-[#777] mt-8">
                        <span class="font-semibold text-gray-800">Fee: ₹30,000</span>
                        <a href="{{ route('contact') }}" class="text-[#00B7FF] font-medium hover:underline">Apply Now</a>
                    </div>
                </div>
                
                <!-- Hands-on Training -->
                <div id="hands-on-details" class="bg-white rounded-[15px] p-8 text-left transition-all duration-300 hover:-translate-y-[10px] hover:shadow-[0_15px_30px_rgba(0,0,0,0.1)] border border-gray-100">
                    <div class="w-[60px] h-[60px] bg-[#f1f8ff] rounded-[15px] flex justify-center items-center mb-6 shadow-sm">
                        <i class="fas fa-chalkboard-teacher text-[#00B7FF] text-[28px]"></i>
                    </div>
                    <h3 class="text-[1.3rem] font-semibold mb-4 text-gray-800">Hands-on Training</h3>
                    <p class="text-[#666] mb-5 leading-[1.7]">Learn by practice to develop real technologies.</p>
                    <div class="flex justify-between mb-5 text-[#777] bg-gray-50 p-3 rounded-lg">
                        <span class="flex items-center"><i class="far fa-clock mr-2 text-[#00B7FF]"></i> Flexible</span>
                        <span class="flex items-center"><i class="fas fa-signal mr-2 text-[#00B7FF]"></i> All Levels</span>
                    </div>
                    
                    <h4 class="text-lg font-semibold mb-3">What You'll Learn:</h4>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#00B7FF] mt-1 mr-3"></i>
                            <span>Project-based learning approach</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#00B7FF] mt-1 mr-3"></i>
                            <span>Real-world application development</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#00B7FF] mt-1 mr-3"></i>
                            <span>Collaborative development practices</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#00B7FF] mt-1 mr-3"></i>
                            <span>Portfolio-building opportunities</span>
                        </li>
                    </ul>
                    
                    <div class="flex justify-between text-[#777] mt-8">
                        <span class="font-semibold text-gray-800">Fee: ₹20,000+</span>
                        <a href="{{ route('contact') }}" class="text-[#00B7FF] font-medium hover:underline">Apply Now</a>
                    </div>
                </div>
                
                <!-- Industry Mentors -->
                <div id="industry-mentors" class="bg-white rounded-[15px] p-8 text-left transition-all duration-300 hover:-translate-y-[10px] hover:shadow-[0_15px_30px_rgba(0,0,0,0.1)] border border-gray-100">
                    <div class="w-[60px] h-[60px] bg-[#f1f8ff] rounded-[15px] flex justify-center items-center mb-6 shadow-sm">
                        <i class="fas fa-industry text-[#00B7FF] text-[28px]"></i>
                    </div>
                    <h3 class="text-[1.3rem] font-semibold mb-4 text-gray-800">Industry Mentors</h3>
                    <p class="text-[#666] mb-5 leading-[1.7]">Learn from experienced professionals with years of expertise.</p>
                    <div class="flex justify-between mb-5 text-[#777] bg-gray-50 p-3 rounded-lg">
                        <span class="flex items-center"><i class="far fa-star mr-2 text-[#00B7FF]"></i> 10+ years</span>
                        <span class="flex items-center"><i class="fas fa-signal mr-2 text-[#00B7FF]"></i> Expert</span>
                    </div>
                    
                    <h4 class="text-lg font-semibold mb-3">What You'll Learn:</h4>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#00B7FF] mt-1 mr-3"></i>
                            <span>One-on-one mentorship sessions</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#00B7FF] mt-1 mr-3"></i>
                            <span>Career guidance and roadmap planning</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#00B7FF] mt-1 mr-3"></i>
                            <span>Industry best practices and insights</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#00B7FF] mt-1 mr-3"></i>
                            <span>Networking opportunities</span>
                        </li>
                    </ul>
                    
                    <div class="flex justify-between text-[#777] mt-8">
                        <span class="font-semibold text-gray-800">Fee: ₹40,000</span>
                        <a href="{{ route('contact') }}" class="text-[#00B7FF] font-medium hover:underline">Apply Now</a>
                    </div>
                </div>
                
                <!-- Certification -->
                <div id="certification" class="bg-white rounded-[15px] p-8 text-left transition-all duration-300 hover:-translate-y-[10px] hover:shadow-[0_15px_30px_rgba(0,0,0,0.1)] border border-gray-100">
                    <div class="w-[60px] h-[60px] bg-[#f1f8ff] rounded-[15px] flex justify-center items-center mb-6 shadow-sm">
                        <i class="fas fa-certificate text-[#00B7FF] text-[28px]"></i>
                    </div>
                    <h3 class="text-[1.3rem] font-semibold mb-4 text-gray-800">Certification</h3>
                    <p class="text-[#666] mb-5 leading-[1.7]">Get industry recognized certificates on completion.</p>
                    <div class="flex justify-between mb-5 text-[#777] bg-gray-50 p-3 rounded-lg">
                        <span class="flex items-center"><i class="fas fa-globe mr-2 text-[#00B7FF]"></i> Global</span>
                        <span class="flex items-center"><i class="fas fa-award mr-2 text-[#00B7FF]"></i> High Value</span>
                    </div>
                    
                    <h4 class="text-lg font-semibold mb-3">Certification Benefits:</h4>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#00B7FF] mt-1 mr-3"></i>
                            <span>Industry-recognized credentials</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#00B7FF] mt-1 mr-3"></i>
                            <span>Enhanced resume value</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#00B7FF] mt-1 mr-3"></i>
                            <span>Verification system for employers</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#00B7FF] mt-1 mr-3"></i>
                            <span>Digital badges for online profiles</span>
                        </li>
                    </ul>
                    
                    <div class="flex justify-between text-[#777] mt-8">
                        <span class="font-semibold text-gray-800">Included in all programs</span>
                        <a href="{{ route('contact') }}" class="text-[#00B7FF] font-medium hover:underline">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Learn Syntax - Teaching Platform -->
    <section class="py-16 bg-gradient-to-b from-white to-[#f8faff]">
        <div class="container mx-auto px-[10%]">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold"><span class="text-[#00B7FF]">Learn Syntax</span> Platform</h2>
                <p class="text-gray-600 mt-4 max-w-3xl mx-auto">Our premier teaching platform where we help you master programming and computer technology, both online and offline</p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-5 gap-8 items-center">
                <div class="lg:col-span-2">
                    <div class="bg-[#f1f8ff] rounded-2xl p-8 relative overflow-hidden">
                        <div class="absolute -top-12 -right-12 w-40 h-40 bg-[#e1f2ff] rounded-full"></div>
                        <div class="absolute -bottom-14 -left-14 w-48 h-48 bg-[#e1f2ff] rounded-full"></div>
                        
                        <div class="relative z-10">
                            <div class="w-20 h-20 bg-white rounded-2xl flex items-center justify-center mb-6 shadow-md">
                                <h3 class="text-3xl font-bold text-[#00B7FF]">LS</h3>
                            </div>
                            
                            <h3 class="text-3xl font-bold mb-4">Learn <span class="text-[#00B7FF]">Syntax</span></h3>
                            <p class="text-gray-700 mb-6 text-lg">
                                The most comprehensive learning platform for aspiring programmers and tech professionals.
                            </p>
                            
                            <div class="flex flex-wrap gap-3 mb-6">
                                <span class="px-4 py-1 bg-white rounded-full text-sm font-medium shadow-sm">Online Courses</span>
                                <span class="px-4 py-1 bg-white rounded-full text-sm font-medium shadow-sm">Offline Workshops</span>
                                <span class="px-4 py-1 bg-white rounded-full text-sm font-medium shadow-sm">Live Classes</span>
                                <span class="px-4 py-1 bg-white rounded-full text-sm font-medium shadow-sm">Project-Based</span>
                            </div>
                            
                            <a href="#learnmore" class="inline-flex items-center font-semibold text-[#00B7FF]">
                                Explore Learn Syntax <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="lg:col-span-3">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Feature 1 -->
                        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition duration-300">
                            <div class="w-12 h-12 bg-[#f1f8ff] rounded-lg flex items-center justify-center mb-4">
                                <i class="fas fa-laptop-code text-[#00B7FF] text-xl"></i>
                            </div>
                            <h4 class="text-xl font-semibold mb-2">Comprehensive Curriculum</h4>
                            <p class="text-gray-600">
                                From fundamentals to advanced concepts, our structured learning paths cover everything from web development to AI and machine learning.
                            </p>
                        </div>
                        
                        <!-- Feature 2 -->
                        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition duration-300">
                            <div class="w-12 h-12 bg-[#f1f8ff] rounded-lg flex items-center justify-center mb-4">
                                <i class="fas fa-graduation-cap text-[#00B7FF] text-xl"></i>
                            </div>
                            <h4 class="text-xl font-semibold mb-2">Experienced Instructors</h4>
                            <p class="text-gray-600">
                                Learn from industry veterans with real-world experience who know how to break down complex concepts into understandable modules.
                            </p>
                        </div>
                        
                        <!-- Feature 3 -->
                        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition duration-300">
                            <div class="w-12 h-12 bg-[#f1f8ff] rounded-lg flex items-center justify-center mb-4">
                                <i class="fas fa-puzzle-piece text-[#00B7FF] text-xl"></i>
                            </div>
                            <h4 class="text-xl font-semibold mb-2">Interactive Learning</h4>
                            <p class="text-gray-600">
                                Our platform features coding challenges, quizzes, and hands-on projects to reinforce what you've learned and build your portfolio.
                            </p>
                        </div>
                        
                        <!-- Feature 4 -->
                        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition duration-300">
                            <div class="w-12 h-12 bg-[#f1f8ff] rounded-lg flex items-center justify-center mb-4">
                                <i class="fas fa-users text-[#00B7FF] text-xl"></i>
                            </div>
                            <h4 class="text-xl font-semibold mb-2">Community Support</h4>
                            <p class="text-gray-600">
                                Join our vibrant community of learners, participate in discussions, and collaborate on projects with peers from around the world.
                            </p>
                        </div>
                    </div>
                    
                    <div class="mt-8 p-6 bg-white rounded-xl shadow-sm border border-gray-100">
                        <h4 class="text-xl font-semibold mb-4">Popular Learning Paths</h4>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                            <a href="#" class="block p-3 text-center hover:bg-[#f1f8ff] rounded-lg transition duration-200">
                                <i class="fas fa-code text-[#00B7FF] text-2xl mb-2"></i>
                                <span class="block text-sm font-medium">Web Development</span>
                            </a>
                            <a href="#" class="block p-3 text-center hover:bg-[#f1f8ff] rounded-lg transition duration-200">
                                <i class="fas fa-mobile-alt text-[#00B7FF] text-2xl mb-2"></i>
                                <span class="block text-sm font-medium">App Development</span>
                            </a>
                            <a href="#" class="block p-3 text-center hover:bg-[#f1f8ff] rounded-lg transition duration-200">
                                <i class="fas fa-database text-[#00B7FF] text-2xl mb-2"></i>
                                <span class="block text-sm font-medium">Data Science</span>
                            </a>
                            <a href="#" class="block p-3 text-center hover:bg-[#f1f8ff] rounded-lg transition duration-200">
                                <i class="fas fa-robot text-[#00B7FF] text-2xl mb-2"></i>
                                <span class="block text-sm font-medium">AI & ML</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mt-16">
                <div class="bg-white rounded-xl shadow-sm p-8 border border-gray-100">
                    <div class="flex flex-col md:flex-row md:items-center justify-between">
                        <div class="mb-6 md:mb-0">
                            <h3 class="text-2xl font-bold mb-2">Start Learning Today</h3>
                            <p class="text-gray-600 max-w-xl">
                                Join thousands of students already learning on our platform. Get unlimited access to all courses, projects, and resources.
                            </p>
                        </div>
                        <div class="flex flex-wrap gap-4">
                            <a href="#" class="px-6 py-3 bg-[#00B7FF] text-white font-semibold rounded-lg hover:shadow-md transition duration-200">
                                Sign Up Free
                            </a>
                            <a href="#" class="px-6 py-3 bg-white border border-gray-200 text-gray-700 font-semibold rounded-lg hover:bg-gray-50 transition duration-200">
                                Explore Courses
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Specialized Courses -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-[10%]">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold">Specialized <span class="text-[#00B7FF]">Courses</span></h2>
                <p class="text-gray-600 mt-4 max-w-3xl mx-auto">Focus on specific technologies with our short-term, intensive courses</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Course 1 -->
                <div class="bg-white border border-gray-100 rounded-xl overflow-hidden hover:shadow-lg transition duration-300">
                    <div class="h-48 bg-[#f1f8ff] flex items-center justify-center">
                        <i class="fab fa-react text-6xl text-[#00B7FF]"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">React.js</h3>
                        <p class="text-gray-600 mb-4">Learn modern frontend development with React and related ecosystem.</p>
                        <div class="flex justify-between text-sm text-gray-500">
                            <span>4 weeks</span>
                            <span>₹15,000</span>
                        </div>
                    </div>
                </div>
                
                <!-- Course 2 -->
                <div class="bg-white border border-gray-100 rounded-xl overflow-hidden hover:shadow-lg transition duration-300">
                    <div class="h-48 bg-[#f1f8ff] flex items-center justify-center">
                        <i class="fas fa-database text-6xl text-[#00B7FF]"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Database Design</h3>
                        <p class="text-gray-600 mb-4">Master SQL, NoSQL and database architecture principles.</p>
                        <div class="flex justify-between text-sm text-gray-500">
                            <span>6 weeks</span>
                            <span>₹18,000</span>
                        </div>
                    </div>
                </div>
                
                <!-- Course 3 -->
                <div class="bg-white border border-gray-100 rounded-xl overflow-hidden hover:shadow-lg transition duration-300">
                    <div class="h-48 bg-[#f1f8ff] flex items-center justify-center">
                        <i class="fab fa-android text-6xl text-[#00B7FF]"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Android Dev</h3>
                        <p class="text-gray-600 mb-4">Build native Android applications using Kotlin and Android SDK.</p>
                        <div class="flex justify-between text-sm text-gray-500">
                            <span>8 weeks</span>
                            <span>₹22,000</span>
                        </div>
                    </div>
                </div>
                
                <!-- Course 4 -->
                <div class="bg-white border border-gray-100 rounded-xl overflow-hidden hover:shadow-lg transition duration-300">
                    <div class="h-48 bg-[#f1f8ff] flex items-center justify-center">
                        <i class="fas fa-cloud text-6xl text-[#00B7FF]"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">AWS Cloud</h3>
                        <p class="text-gray-600 mb-4">Deploy and manage applications on AWS cloud infrastructure.</p>
                        <div class="flex justify-between text-sm text-gray-500">
                            <span>6 weeks</span>
                            <span>₹20,000</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-10">
                <a href="#" class="px-8 py-3 bg-[#00B7FF] text-white font-semibold rounded-full hover:shadow-lg transition duration-300">
                    View All Courses
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-[10%]">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold">Student <span class="text-[#00B7FF]">Testimonials</span></h2>
                <p class="text-gray-600 mt-4 max-w-3xl mx-auto">Hear from our alumni about their learning experience and career growth</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-white p-8 rounded-xl shadow-md">
                    <div class="flex items-center mb-6">
                        <div class="w-14 h-14 rounded-full overflow-hidden mr-4">
                            <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Student" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h3 class="font-semibold">Rahul Sharma</h3>
                            <p class="text-gray-500 text-sm">BCA Graduate, Software Developer</p>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">
                        "The BCA program at Comestro helped me build a strong foundation in programming. The hands-on projects were particularly useful for my portfolio, which helped me land my first job."
                    </p>
                    <div class="flex text-[#FFD700]">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                
                <!-- Testimonial 2 -->
                <div class="bg-white p-8 rounded-xl shadow-md">
                    <div class="flex items-center mb-6">
                        <div class="w-14 h-14 rounded-full overflow-hidden mr-4">
                            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Student" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h3 class="font-semibold">Priya Patel</h3>
                            <p class="text-gray-500 text-sm">B.Tech, Frontend Developer</p>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">
                        "The industry mentors at Comestro provided valuable insights that you don't typically get in college. Their guidance helped me focus on the skills that matter in the real world."
                    </p>
                    <div class="flex text-[#FFD700]">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                
                <!-- Testimonial 3 -->
                <div class="bg-white p-8 rounded-xl shadow-md">
                    <div class="flex items-center mb-6">
                        <div class="w-14 h-14 rounded-full overflow-hidden mr-4">
                            <img src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Student" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h3 class="font-semibold">Amit Kumar</h3>
                            <p class="text-gray-500 text-sm">MCA, Project Manager</p>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">
                        "As an MCA student, the project management training at Comestro gave me an edge in my career. I was able to take on leadership roles much earlier than my peers from other institutions."
                    </p>
                    <div class="flex text-[#FFD700]">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Placement Stats -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-[10%]">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold">Placement <span class="text-[#00B7FF]">Statistics</span></h2>
                <p class="text-gray-600 mt-4 max-w-3xl mx-auto">Our track record of student placements and career success</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 text-center">
                <div class="p-6 bg-gray-50 rounded-xl hover:shadow-lg transition duration-300">
                    <div class="text-4xl font-bold text-[#00B7FF] mb-2">92%</div>
                    <p class="text-xl text-gray-700">Placement Rate</p>
                </div>
                <div class="p-6 bg-gray-50 rounded-xl hover:shadow-lg transition duration-300">
                    <div class="text-4xl font-bold text-[#00B7FF] mb-2">₹6.5L</div>
                    <p class="text-xl text-gray-700">Avg. Starting Salary</p>
                </div>
                <div class="p-6 bg-gray-50 rounded-xl hover:shadow-lg transition duration-300">
                    <div class="text-4xl font-bold text-[#00B7FF] mb-2">50+</div>
                    <p class="text-xl text-gray-700">Hiring Partners</p>
                </div>
                <div class="p-6 bg-gray-50 rounded-xl hover:shadow-lg transition duration-300">
                    <div class="text-4xl font-bold text-[#00B7FF] mb-2">2000+</div>
                    <p class="text-xl text-gray-700">Alumni Network</p>
                </div>
            </div>
            
            <div class="mt-12">
                <h3 class="text-2xl font-semibold mb-6 text-center">Our Hiring Partners</h3>
                <div class="flex flex-wrap justify-center items-center gap-8 opacity-60">
                    <div class="w-24 h-24 flex items-center justify-center">
                        <i class="fab fa-google text-5xl"></i>
                    </div>
                    <div class="w-24 h-24 flex items-center justify-center">
                        <i class="fab fa-microsoft text-5xl"></i>
                    </div>
                    <div class="w-24 h-24 flex items-center justify-center">
                        <i class="fab fa-amazon text-5xl"></i>
                    </div>
                    <div class="w-24 h-24 flex items-center justify-center">
                        <i class="fab fa-facebook text-5xl"></i>
                    </div>
                    <div class="w-24 h-24 flex items-center justify-center">
                        <i class="fab fa-apple text-5xl"></i>
                    </div>
                    <div class="w-24 h-24 flex items-center justify-center">
                        <i class="fab fa-ibm text-5xl"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-[10%]">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold">Frequently Asked <span class="text-[#00B7FF]">Questions</span></h2>
                <p class="text-gray-600 mt-4 max-w-3xl mx-auto">Common questions about our training programs</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white p-6 rounded-xl shadow-sm">
                    <h3 class="text-xl font-semibold mb-3">What are the eligibility requirements?</h3>
                    <p class="text-gray-600">
                        Each program has specific eligibility criteria, but generally, you should be enrolled in or have completed the respective degree (BCA, B.Tech, MCA). For specialized courses, basic programming knowledge is recommended.
                    </p>
                </div>
                
                <div class="bg-white p-6 rounded-xl shadow-sm">
                    <h3 class="text-xl font-semibold mb-3">Are there any scholarships available?</h3>
                    <p class="text-gray-600">
                        Yes, we offer merit-based scholarships for outstanding students. Additionally, we have special discounts for economically disadvantaged students. Contact our admissions team for more details.
                    </p>
                </div>
                
                <div class="bg-white p-6 rounded-xl shadow-sm">
                    <h3 class="text-xl font-semibold mb-3">What is the class schedule like?</h3>
                    <p class="text-gray-600">
                        Most programs offer flexible timing options, including weekend batches, evening classes, and full-time options. The specific schedule depends on the program you choose and will be shared during admission.
                    </p>
                </div>
                
                <div class="bg-white p-6 rounded-xl shadow-sm">
                    <h3 class="text-xl font-semibold mb-3">Is there a refund policy?</h3>
                    <p class="text-gray-600">
                        Yes, we offer a 7-day cooling-off period after enrollment where you can get a full refund if you decide the program isn't for you. After that, partial refunds may be available based on the amount of course completed.
                    </p>
                </div>
                
                <div class="bg-white p-6 rounded-xl shadow-sm">
                    <h3 class="text-xl font-semibold mb-3">Do you offer online training?</h3>
                    <p class="text-gray-600">
                        Yes, all our programs are available in both online and offline formats. Online classes include live sessions, recorded lectures, and the same project-based curriculum as our in-person training.
                    </p>
                </div>
                
                <div class="bg-white p-6 rounded-xl shadow-sm">
                    <h3 class="text-xl font-semibold mb-3">How does the placement assistance work?</h3>
                    <p class="text-gray-600">
                        Our placement assistance includes resume building, interview preparation, mock interviews, and connecting you with our hiring partners. We also conduct job fairs and recruitment drives regularly.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-16 bg-gradient-to-r from-[#00B7FF] to-[#0099CC] text-white">
        <div class="container mx-auto px-[10%] text-center">
            <h2 class="text-3xl font-bold mb-6">Ready to Start Your Tech Journey?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">
                Join thousands of students who have successfully launched their careers with our training programs.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="{{ route('contact') }}" class="px-8 py-3 bg-white text-[#00B7FF] font-semibold rounded-full hover:shadow-lg transition duration-300">
                    Apply Now
                </a>
                <a href="#download-curriculum" class="px-8 py-3 bg-transparent border-2 border-white text-white font-semibold rounded-full hover:bg-white hover:text-[#00B7FF] transition duration-300">
                    Download Curriculum
                </a>
            </div>
        </div>
    </section>
@endsection