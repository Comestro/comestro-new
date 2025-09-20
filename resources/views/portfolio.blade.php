@extends('layouts.app')

@section('title', 'Portfolio')

@section('content')
    <!-- Page Header -->
    <section class="page-header">
        <div class="container mx-auto px-[10%]">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Our <span class="text-[#00B7FF]">Portfolio</span></h1>
            <p class="text-xl text-gray-200 max-w-3xl mx-auto">Explore our successful projects and innovative solutions we've delivered to our clients.</p>
        </div>
    </section>

    <!-- Portfolio Overview -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-[10%]">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold">Our <span class="text-[#00B7FF]">Work</span></h2>
                <p class="text-gray-600 mt-4 max-w-3xl mx-auto">We create cutting-edge solutions that drive business growth and deliver exceptional user experiences.</p>
            </div>
            
            <!-- Portfolio Categories -->
            <div class="flex flex-wrap justify-center mb-12 gap-4">
                <button class="px-6 py-2 bg-[#00B7FF] text-white rounded-full hover:bg-[#0099cc] transition duration-200">
                    All Projects
                </button>
                <button class="px-6 py-2 bg-white text-gray-700 rounded-full hover:bg-gray-100 transition duration-200">
                    Web Development
                </button>
                <button class="px-6 py-2 bg-white text-gray-700 rounded-full hover:bg-gray-100 transition duration-200">
                    Mobile Apps
                </button>
                <button class="px-6 py-2 bg-white text-gray-700 rounded-full hover:bg-gray-100 transition duration-200">
                    E-commerce
                </button>
                <button class="px-6 py-2 bg-white text-gray-700 rounded-full hover:bg-gray-100 transition duration-200">
                    Enterprise Solutions
                </button>
            </div>
            
            <!-- Featured Projects -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
                <!-- Project 1 -->
                <div class="group relative overflow-hidden rounded-xl shadow-md hover:shadow-lg transition duration-300">
                    <img src="https://images.unsplash.com/photo-1496171367470-9ed9a91ea931?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="E-commerce Platform" class="w-full h-64 object-cover object-center">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex flex-col justify-end p-6 text-white">
                        <span class="inline-block px-3 py-1 bg-[#00B7FF]/90 text-white text-xs font-medium rounded-full mb-2">
                            E-commerce
                        </span>
                        <h3 class="text-xl font-bold mb-1">FashionHub</h3>
                        <p class="text-sm text-white/80 mb-2">A complete e-commerce solution for a fashion retailer with advanced filtering, search, and payment integrations.</p>
                        <a href="#" class="inline-block font-semibold text-[#00B7FF]">View Details</a>
                    </div>
                    <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 flex items-center justify-center transition-opacity duration-300">
                        <div class="flex flex-col items-center">
                            <a href="#" class="inline-block px-6 py-2 bg-[#00B7FF] text-white font-semibold rounded-full hover:bg-white hover:text-[#00B7FF] transition duration-200 mb-4">
                                View Case Study
                            </a>
                            <a href="#" class="text-white hover:text-[#00B7FF] transition duration-200">
                                Visit Website
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Project 2 -->
                <div class="group relative overflow-hidden rounded-xl shadow-md hover:shadow-lg transition duration-300">
                    <img src="https://images.unsplash.com/photo-1555774698-0b77e0d5fac6?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Mobile App" class="w-full h-64 object-cover object-center">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex flex-col justify-end p-6 text-white">
                        <span class="inline-block px-3 py-1 bg-[#00B7FF]/90 text-white text-xs font-medium rounded-full mb-2">
                            Mobile App
                        </span>
                        <h3 class="text-xl font-bold mb-1">HealthTracker</h3>
                        <p class="text-sm text-white/80 mb-2">A fitness and wellness tracking app with personalized recommendations, workout plans, and nutrition guidance.</p>
                        <a href="#" class="inline-block font-semibold text-[#00B7FF]">View Details</a>
                    </div>
                    <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 flex items-center justify-center transition-opacity duration-300">
                        <div class="flex flex-col items-center">
                            <a href="#" class="inline-block px-6 py-2 bg-[#00B7FF] text-white font-semibold rounded-full hover:bg-white hover:text-[#00B7FF] transition duration-200 mb-4">
                                View Case Study
                            </a>
                            <a href="#" class="text-white hover:text-[#00B7FF] transition duration-200">
                                App Store
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Project 3 -->
                <div class="group relative overflow-hidden rounded-xl shadow-md hover:shadow-lg transition duration-300">
                    <img src="https://images.unsplash.com/photo-1559028012-481c04fa702d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Enterprise Dashboard" class="w-full h-64 object-cover object-center">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex flex-col justify-end p-6 text-white">
                        <span class="inline-block px-3 py-1 bg-[#00B7FF]/90 text-white text-xs font-medium rounded-full mb-2">
                            Enterprise Solution
                        </span>
                        <h3 class="text-xl font-bold mb-1">DataInsight</h3>
                        <p class="text-sm text-white/80 mb-2">A comprehensive analytics dashboard for enterprise clients with real-time data visualization and reporting.</p>
                        <a href="#" class="inline-block font-semibold text-[#00B7FF]">View Details</a>
                    </div>
                    <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 flex items-center justify-center transition-opacity duration-300">
                        <div class="flex flex-col items-center">
                            <a href="#" class="inline-block px-6 py-2 bg-[#00B7FF] text-white font-semibold rounded-full hover:bg-white hover:text-[#00B7FF] transition duration-200 mb-4">
                                View Case Study
                            </a>
                            <a href="#" class="text-white hover:text-[#00B7FF] transition duration-200">
                                Demo
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Project 4 -->
                <div class="group relative overflow-hidden rounded-xl shadow-md hover:shadow-lg transition duration-300">
                    <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Web Platform" class="w-full h-64 object-cover object-center">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex flex-col justify-end p-6 text-white">
                        <span class="inline-block px-3 py-1 bg-[#00B7FF]/90 text-white text-xs font-medium rounded-full mb-2">
                            Web Development
                        </span>
                        <h3 class="text-xl font-bold mb-1">LearnPortal</h3>
                        <p class="text-sm text-white/80 mb-2">An online learning platform with course management, video streaming, and student progress tracking.</p>
                        <a href="#" class="inline-block font-semibold text-[#00B7FF]">View Details</a>
                    </div>
                    <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 flex items-center justify-center transition-opacity duration-300">
                        <div class="flex flex-col items-center">
                            <a href="#" class="inline-block px-6 py-2 bg-[#00B7FF] text-white font-semibold rounded-full hover:bg-white hover:text-[#00B7FF] transition duration-200 mb-4">
                                View Case Study
                            </a>
                            <a href="#" class="text-white hover:text-[#00B7FF] transition duration-200">
                                Visit Website
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Project 5 -->
                <div class="group relative overflow-hidden rounded-xl shadow-md hover:shadow-lg transition duration-300">
                    <img src="https://images.unsplash.com/photo-1522542550221-31fd19575a2d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Mobile Banking App" class="w-full h-64 object-cover object-center">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex flex-col justify-end p-6 text-white">
                        <span class="inline-block px-3 py-1 bg-[#00B7FF]/90 text-white text-xs font-medium rounded-full mb-2">
                            Fintech
                        </span>
                        <h3 class="text-xl font-bold mb-1">QuickPay</h3>
                        <p class="text-sm text-white/80 mb-2">A secure mobile banking application with easy money transfers, bill payments, and expense tracking.</p>
                        <a href="#" class="inline-block font-semibold text-[#00B7FF]">View Details</a>
                    </div>
                    <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 flex items-center justify-center transition-opacity duration-300">
                        <div class="flex flex-col items-center">
                            <a href="#" class="inline-block px-6 py-2 bg-[#00B7FF] text-white font-semibold rounded-full hover:bg-white hover:text-[#00B7FF] transition duration-200 mb-4">
                                View Case Study
                            </a>
                            <a href="#" class="text-white hover:text-[#00B7FF] transition duration-200">
                                App Store
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Project 6 -->
                <div class="group relative overflow-hidden rounded-xl shadow-md hover:shadow-lg transition duration-300">
                    <img src="https://images.unsplash.com/photo-1556155092-490a1ba16284?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Real Estate Platform" class="w-full h-64 object-cover object-center">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex flex-col justify-end p-6 text-white">
                        <span class="inline-block px-3 py-1 bg-[#00B7FF]/90 text-white text-xs font-medium rounded-full mb-2">
                            Real Estate
                        </span>
                        <h3 class="text-xl font-bold mb-1">PropertyFinder</h3>
                        <p class="text-sm text-white/80 mb-2">A real estate platform with advanced property search, virtual tours, and agent management system.</p>
                        <a href="#" class="inline-block font-semibold text-[#00B7FF]">View Details</a>
                    </div>
                    <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 flex items-center justify-center transition-opacity duration-300">
                        <div class="flex flex-col items-center">
                            <a href="#" class="inline-block px-6 py-2 bg-[#00B7FF] text-white font-semibold rounded-full hover:bg-white hover:text-[#00B7FF] transition duration-200 mb-4">
                                View Case Study
                            </a>
                            <a href="#" class="text-white hover:text-[#00B7FF] transition duration-200">
                                Visit Website
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center">
                <a href="#" class="px-8 py-3 bg-[#00B7FF] text-white font-semibold rounded-full hover:shadow-lg transition duration-300">
                    Load More Projects
                </a>
            </div>
        </div>
    </section>

    <!-- Case Study Feature -->
    <section class="py-16 bg-gradient-to-b from-white to-[#f8f9fa]">
        <div class="container mx-auto px-[10%]">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold">Featured <span class="text-[#00B7FF]">Case Study</span></h2>
                <p class="text-gray-600 mt-4 max-w-3xl mx-auto">A deep dive into one of our most successful projects</p>
            </div>
            
            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <div class="grid grid-cols-1 lg:grid-cols-2">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1579403124614-197f69d8187b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="E-learning Platform" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-[#00B7FF]/20 flex items-center justify-center">
                            <a href="#" class="w-16 h-16 bg-white/80 rounded-full flex items-center justify-center hover:bg-white transition duration-300">
                                <i class="fas fa-play text-[#00B7FF] text-xl"></i>
                            </a>
                        </div>
                    </div>
                    <div class="p-8 md:p-12">
                        <div class="flex items-center mb-4">
                            <span class="px-3 py-1 bg-[#e1f2ff] text-[#00B7FF] text-xs font-medium rounded-full">
                                Education Technology
                            </span>
                            <span class="mx-3 text-gray-300">|</span>
                            <span class="text-gray-500 text-sm">Completed in 2023</span>
                        </div>
                        <h3 class="text-2xl font-bold mb-4">SkillBoost: E-learning Platform Transformation</h3>
                        <p class="text-gray-600 mb-6">
                            SkillBoost needed a complete overhaul of their legacy learning management system to accommodate growing user demand and new feature requirements. We delivered a scalable solution that improved user engagement by 78%.
                        </p>
                        
                        <div class="grid grid-cols-2 gap-6 mb-8">
                            <div>
                                <h4 class="font-semibold text-[#00B7FF] mb-2">Challenge</h4>
                                <p class="text-gray-600 text-sm">
                                    Migrate 50,000+ users and 2,000+ courses without disruption while adding new functionality.
                                </p>
                            </div>
                            <div>
                                <h4 class="font-semibold text-[#00B7FF] mb-2">Solution</h4>
                                <p class="text-gray-600 text-sm">
                                    Phased migration approach with microservices architecture for scalability.
                                </p>
                            </div>
                            <div>
                                <h4 class="font-semibold text-[#00B7FF] mb-2">Technologies</h4>
                                <p class="text-gray-600 text-sm">
                                    React, Node.js, MongoDB, AWS, WebRTC
                                </p>
                            </div>
                            <div>
                                <h4 class="font-semibold text-[#00B7FF] mb-2">Results</h4>
                                <p class="text-gray-600 text-sm">
                                    78% increase in engagement, 45% reduction in loading times
                                </p>
                            </div>
                        </div>
                        
                        <a href="#" class="inline-flex items-center px-6 py-3 bg-[#00B7FF] text-white font-semibold rounded-lg hover:bg-[#0099cc] transition duration-200">
                            Read Full Case Study <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Technologies -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-[10%]">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold">Technologies We <span class="text-[#00B7FF]">Work With</span></h2>
                <p class="text-gray-600 mt-4 max-w-3xl mx-auto">Our tech stack ensures we deliver modern, efficient, and scalable solutions</p>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-8 text-center">
                <div class="p-6 hover:shadow-md rounded-xl transition duration-300">
                    <i class="fab fa-react text-5xl text-[#61DAFB] mb-4"></i>
                    <h3 class="font-semibold">React</h3>
                </div>
                <div class="p-6 hover:shadow-md rounded-xl transition duration-300">
                    <i class="fab fa-angular text-5xl text-[#DD0031] mb-4"></i>
                    <h3 class="font-semibold">Angular</h3>
                </div>
                <div class="p-6 hover:shadow-md rounded-xl transition duration-300">
                    <i class="fab fa-vuejs text-5xl text-[#4FC08D] mb-4"></i>
                    <h3 class="font-semibold">Vue.js</h3>
                </div>
                <div class="p-6 hover:shadow-md rounded-xl transition duration-300">
                    <i class="fab fa-node-js text-5xl text-[#339933] mb-4"></i>
                    <h3 class="font-semibold">Node.js</h3>
                </div>
                <div class="p-6 hover:shadow-md rounded-xl transition duration-300">
                    <i class="fab fa-python text-5xl text-[#3776AB] mb-4"></i>
                    <h3 class="font-semibold">Python</h3>
                </div>
                <div class="p-6 hover:shadow-md rounded-xl transition duration-300">
                    <i class="fab fa-php text-5xl text-[#777BB4] mb-4"></i>
                    <h3 class="font-semibold">PHP</h3>
                </div>
                <div class="p-6 hover:shadow-md rounded-xl transition duration-300">
                    <i class="fab fa-laravel text-5xl text-[#FF2D20] mb-4"></i>
                    <h3 class="font-semibold">Laravel</h3>
                </div>
                <div class="p-6 hover:shadow-md rounded-xl transition duration-300">
                    <i class="fab fa-aws text-5xl text-[#232F3E] mb-4"></i>
                    <h3 class="font-semibold">AWS</h3>
                </div>
                <div class="p-6 hover:shadow-md rounded-xl transition duration-300">
                    <i class="fab fa-android text-5xl text-[#3DDC84] mb-4"></i>
                    <h3 class="font-semibold">Android</h3>
                </div>
                <div class="p-6 hover:shadow-md rounded-xl transition duration-300">
                    <i class="fab fa-apple text-5xl text-[#000000] mb-4"></i>
                    <h3 class="font-semibold">iOS</h3>
                </div>
                <div class="p-6 hover:shadow-md rounded-xl transition duration-300">
                    <i class="fas fa-database text-5xl text-[#4479A1] mb-4"></i>
                    <h3 class="font-semibold">MySQL</h3>
                </div>
                <div class="p-6 hover:shadow-md rounded-xl transition duration-300">
                    <i class="fas fa-server text-5xl text-[#47A248] mb-4"></i>
                    <h3 class="font-semibold">MongoDB</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Client Testimonials -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-[10%]">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold">Client <span class="text-[#00B7FF]">Testimonials</span></h2>
                <p class="text-gray-600 mt-4 max-w-3xl mx-auto">What our clients say about working with us</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-white p-8 rounded-xl shadow-md">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 rounded-full overflow-hidden mr-4">
                            <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Client" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h3 class="font-semibold">Rajesh Mehta</h3>
                            <p class="text-gray-500 text-sm">CEO, FashionHub</p>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">
                        "Comestro transformed our online store into a high-performing e-commerce platform. Their team was professional, responsive, and delivered beyond our expectations. Our sales have increased by 35% since the launch."
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
                        <div class="w-16 h-16 rounded-full overflow-hidden mr-4">
                            <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Client" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h3 class="font-semibold">Priya Singh</h3>
                            <p class="text-gray-500 text-sm">CTO, SkillBoost</p>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">
                        "The team at Comestro helped us completely revamp our e-learning platform. Their technical expertise and understanding of user experience design made all the difference. The project was delivered on time and within budget."
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
                        <div class="w-16 h-16 rounded-full overflow-hidden mr-4">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Client" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h3 class="font-semibold">Vikram Desai</h3>
                            <p class="text-gray-500 text-sm">Product Manager, QuickPay</p>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">
                        "Working with Comestro on our banking app was a great experience. They understood the importance of security and user trust while still delivering an intuitive, modern interface. Our user base has grown by 62% since the redesign."
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

    <!-- CTA -->
    <section class="py-16 bg-gradient-to-r from-[#00B7FF] to-[#0099CC] text-white">
        <div class="container mx-auto px-[10%] text-center">
            <h2 class="text-3xl font-bold mb-6">Ready to Build Something Amazing?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">
                Let's discuss how we can help bring your ideas to life with innovative technology solutions.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="{{ route('contact') }}" class="px-8 py-3 bg-white text-[#00B7FF] font-semibold rounded-full hover:shadow-lg transition duration-300">
                    Start a Project
                </a>
                <a href="{{ route('services') }}" class="px-8 py-3 bg-transparent border-2 border-white text-white font-semibold rounded-full hover:bg-white hover:text-[#00B7FF] transition duration-300">
                    Explore Services
                </a>
            </div>
        </div>
    </section>
@endsection