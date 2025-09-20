@extends('layouts.app')

@section('title', 'Services')

@section('content')
    <!-- Page Header -->
    <section class="page-header">
        <div class="container mx-auto px-[10%]">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Our <span class="text-[#00B7FF]">Services</span></h1>
            <p class="text-xl text-gray-200 max-w-3xl mx-auto">Comprehensive technology solutions designed to transform your business and drive growth.</p>
        </div>
    </section>

    <!-- Services Overview -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-[10%]">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold">What We <span class="text-[#00B7FF]">Offer</span></h2>
                <p class="text-gray-600 mt-4 max-w-3xl mx-auto">From concept to deployment, we provide end-to-end technology solutions to help businesses grow and thrive in the digital age.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Web Development -->
                <div id="web-design" class="bg-white rounded-[15px] p-8 text-left transition-all duration-300 hover:-translate-y-[10px] hover:shadow-[0_15px_30px_rgba(0,0,0,0.1)] border border-gray-100">
                    <div class="w-[70px] h-[70px] bg-[#f1f8ff] rounded-[20px] flex justify-center items-center mb-5 shadow-sm">
                        <i class="fas fa-globe text-[#00B7FF] text-3xl"></i>
                    </div>
                    <h3 class="text-[1.4rem] font-semibold mb-[15px] text-gray-800">Web Development</h3>
                    <p class="text-[#666] mb-5 leading-[1.7]">Create, implement, and maintain websites with seamless user experience.</p>
                    <div class="mt-5">
                        <div class="flex items-center mb-2.5">
                            <i class="fas fa-check text-[#00B7FF] mr-2.5"></i>
                            <span>Responsive Design</span>
                        </div>
                        <div class="flex items-center mb-2.5">
                            <i class="fas fa-check text-[#00B7FF] mr-2.5"></i>
                            <span>UI/UX Integration</span>
                        </div>
                        <div class="flex items-center mb-2.5">
                            <i class="fas fa-check text-[#00B7FF] mr-2.5"></i>
                            <span>Fast Loading</span>
                        </div>
                        <div class="flex items-center mb-2.5">
                            <i class="fas fa-check text-[#00B7FF] mr-2.5"></i>
                            <span>SEO Ready</span>
                        </div>
                    </div>
                </div>
                
                <!-- Android Development -->
                <div id="android-dev" class="bg-white rounded-[15px] p-8 text-left transition-all duration-300 hover:-translate-y-[10px] hover:shadow-[0_15px_30px_rgba(0,0,0,0.1)] border border-gray-100">
                    <div class="w-[70px] h-[70px] bg-[#f1f8ff] rounded-[20px] flex justify-center items-center mb-5 shadow-sm">
                        <i class="fas fa-mobile-alt text-[#00B7FF] text-3xl"></i>
                    </div>
                    <h3 class="text-[1.4rem] font-semibold mb-[15px] text-gray-800">Android Development</h3>
                    <p class="text-[#666] mb-5 leading-[1.7]">Scalable and powerful mobile apps built with latest Android technologies.</p>
                    <div class="mt-5">
                        <div class="flex items-center mb-2.5">
                            <i class="fas fa-check text-[#00B7FF] mr-2.5"></i>
                            <span>Native Android</span>
                        </div>
                        <div class="flex items-center mb-2.5">
                            <i class="fas fa-check text-[#00B7FF] mr-2.5"></i>
                            <span>Cross Platform</span>
                        </div>
                        <div class="flex items-center mb-2.5">
                            <i class="fas fa-check text-[#00B7FF] mr-2.5"></i>
                            <span>Performance Optimized</span>
                        </div>
                        <div class="flex items-center mb-2.5">
                            <i class="fas fa-check text-[#00B7FF] mr-2.5"></i>
                            <span>App Testing</span>
                        </div>
                    </div>
                </div>
                
                <!-- SaaS Development -->
                <div id="saas-dev" class="bg-white rounded-[15px] p-8 text-left transition-all duration-300 hover:-translate-y-[10px] hover:shadow-[0_15px_30px_rgba(0,0,0,0.1)] border border-gray-100">
                    <div class="w-[70px] h-[70px] bg-[#f1f8ff] rounded-[20px] flex justify-center items-center mb-5 shadow-sm">
                        <i class="fas fa-server text-[#00B7FF] text-3xl"></i>
                    </div>
                    <h3 class="text-[1.4rem] font-semibold mb-[15px] text-gray-800">SaaS Development</h3>
                    <p class="text-[#666] mb-5 leading-[1.7]">Cloud based solutions designed to improve your business growth and efficiency.</p>
                    <div class="mt-5">
                        <div class="flex items-center mb-2.5">
                            <i class="fas fa-check text-[#00B7FF] mr-2.5"></i>
                            <span>Scalable Architecture</span>
                        </div>
                        <div class="flex items-center mb-2.5">
                            <i class="fas fa-check text-[#00B7FF] mr-2.5"></i>
                            <span>Cloud Integration</span>
                        </div>
                        <div class="flex items-center mb-2.5">
                            <i class="fas fa-check text-[#00B7FF] mr-2.5"></i>
                            <span>API Development</span>
                        </div>
                        <div class="flex items-center mb-2.5">
                            <i class="fas fa-check text-[#00B7FF] mr-2.5"></i>
                            <span>Data Management</span>
                        </div>
                    </div>
                </div>
                
                <!-- MVP in 1 Week -->
                <div id="mvp-dev" class="bg-white rounded-[15px] p-8 text-left transition-all duration-300 hover:-translate-y-[10px] hover:shadow-[0_15px_30px_rgba(0,0,0,0.1)] border border-gray-100">
                    <div class="w-[70px] h-[70px] bg-[#f1f8ff] rounded-[20px] flex justify-center items-center mb-5 shadow-sm">
                        <i class="fas fa-code text-[#00B7FF] text-3xl"></i>
                    </div>
                    <h3 class="text-[1.4rem] font-semibold mb-[15px] text-gray-800">MVP in 1 Week</h3>
                    <p class="text-[#666] mb-5 leading-[1.7]">Launch your minimum viable product quickly for market validation and rapid development.</p>
                    <div class="mt-5">
                        <div class="flex items-center mb-2.5">
                            <i class="fas fa-check text-[#00B7FF] mr-2.5"></i>
                            <span>Rapid Prototyping</span>
                        </div>
                        <div class="flex items-center mb-2.5">
                            <i class="fas fa-check text-[#00B7FF] mr-2.5"></i>
                            <span>Agile Development</span>
                        </div>
                        <div class="flex items-center mb-2.5">
                            <i class="fas fa-check text-[#00B7FF] mr-2.5"></i>
                            <span>Core Features</span>
                        </div>
                        <div class="flex items-center mb-2.5">
                            <i class="fas fa-check text-[#00B7FF] mr-2.5"></i>
                            <span>Market Ready</span>
                        </div>
                    </div>
                </div>
                
                <!-- Free Demo Design -->
                <div id="free-demo" class="bg-white rounded-[15px] p-8 text-left transition-all duration-300 hover:-translate-y-[10px] hover:shadow-[0_15px_30px_rgba(0,0,0,0.1)] border border-gray-100">
                    <div class="w-[70px] h-[70px] bg-[#f1f8ff] rounded-[20px] flex justify-center items-center mb-5 shadow-sm">
                        <i class="fas fa-paint-brush text-[#00B7FF] text-3xl"></i>
                    </div>
                    <h3 class="text-[1.4rem] font-semibold mb-[15px] text-gray-800">100% Free Demo Design</h3>
                    <p class="text-[#666] mb-5 leading-[1.7]">Experience our design expertise with a free sample before making any commitment.</p>
                    <div class="mt-5">
                        <div class="flex items-center mb-2.5">
                            <i class="fas fa-check text-[#00B7FF] mr-2.5"></i>
                            <span>No Commitment</span>
                        </div>
                        <div class="flex items-center mb-2.5">
                            <i class="fas fa-check text-[#00B7FF] mr-2.5"></i>
                            <span>Professional Design</span>
                        </div>
                        <div class="flex items-center mb-2.5">
                            <i class="fas fa-check text-[#00B7FF] mr-2.5"></i>
                            <span>Feedback Integration</span>
                        </div>
                        <div class="flex items-center mb-2.5">
                            <i class="fas fa-check text-[#00B7FF] mr-2.5"></i>
                            <span>Design Consultation</span>
                        </div>
                    </div>
                </div>

                <!-- iOS Development -->
                <div class="bg-white rounded-[15px] p-8 text-left transition-all duration-300 hover:-translate-y-[10px] hover:shadow-[0_15px_30px_rgba(0,0,0,0.1)] border border-gray-100">
                    <div class="w-[70px] h-[70px] bg-[#f1f8ff] rounded-[20px] flex justify-center items-center mb-5 shadow-sm">
                        <i class="fab fa-apple text-[#00B7FF] text-3xl"></i>
                    </div>
                    <h3 class="text-[1.4rem] font-semibold mb-[15px] text-gray-800">iOS Development</h3>
                    <p class="text-[#666] mb-5 leading-[1.7]">Beautiful and functional iOS applications designed with user experience in mind.</p>
                    <div class="mt-5">
                        <div class="flex items-center mb-2.5">
                            <i class="fas fa-check text-[#00B7FF] mr-2.5"></i>
                            <span>Swift & Objective-C</span>
                        </div>
                        <div class="flex items-center mb-2.5">
                            <i class="fas fa-check text-[#00B7FF] mr-2.5"></i>
                            <span>App Store Optimization</span>
                        </div>
                        <div class="flex items-center mb-2.5">
                            <i class="fas fa-check text-[#00B7FF] mr-2.5"></i>
                            <span>Apple UI Guidelines</span>
                        </div>
                        <div class="flex items-center mb-2.5">
                            <i class="fas fa-check text-[#00B7FF] mr-2.5"></i>
                            <span>Push Notifications</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Process -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-[10%]">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold">Our Development <span class="text-[#00B7FF]">Process</span></h2>
                <p class="text-gray-600 mt-4 max-w-3xl mx-auto">A structured approach to bring your ideas to life</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Step 1 -->
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition duration-300">
                    <div class="w-12 h-12 bg-[#f1f8ff] rounded-full flex items-center justify-center mb-4 text-[#00B7FF] font-bold text-xl">1</div>
                    <h3 class="text-xl font-semibold mb-3">Discovery</h3>
                    <p class="text-gray-700">
                        We begin by understanding your business needs, target audience, and project goals to create a tailored approach.
                    </p>
                </div>
                
                <!-- Step 2 -->
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition duration-300">
                    <div class="w-12 h-12 bg-[#f1f8ff] rounded-full flex items-center justify-center mb-4 text-[#00B7FF] font-bold text-xl">2</div>
                    <h3 class="text-xl font-semibold mb-3">Planning</h3>
                    <p class="text-gray-700">
                        We create detailed project specifications, wireframes, and timelines to ensure clear direction and expectations.
                    </p>
                </div>
                
                <!-- Step 3 -->
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition duration-300">
                    <div class="w-12 h-12 bg-[#f1f8ff] rounded-full flex items-center justify-center mb-4 text-[#00B7FF] font-bold text-xl">3</div>
                    <h3 class="text-xl font-semibold mb-3">Development</h3>
                    <p class="text-gray-700">
                        Our expert developers build your solution using the latest technologies and best coding practices.
                    </p>
                </div>
                
                <!-- Step 4 -->
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition duration-300">
                    <div class="w-12 h-12 bg-[#f1f8ff] rounded-full flex items-center justify-center mb-4 text-[#00B7FF] font-bold text-xl">4</div>
                    <h3 class="text-xl font-semibold mb-3">Launch & Support</h3>
                    <p class="text-gray-700">
                        We deploy your solution and provide ongoing maintenance and support to ensure long-term success.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Technologies -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-[10%]">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold">Technologies We <span class="text-[#00B7FF]">Work With</span></h2>
                <p class="text-gray-600 mt-4 max-w-3xl mx-auto">Leveraging the best tools and frameworks to build powerful solutions</p>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-8">
                <div class="p-4 flex flex-col items-center hover:transform hover:scale-110 transition duration-300">
                    <i class="fab fa-react text-5xl text-[#61DAFB] mb-3"></i>
                    <span class="font-medium">React</span>
                </div>
                <div class="p-4 flex flex-col items-center hover:transform hover:scale-110 transition duration-300">
                    <i class="fab fa-angular text-5xl text-[#DD0031] mb-3"></i>
                    <span class="font-medium">Angular</span>
                </div>
                <div class="p-4 flex flex-col items-center hover:transform hover:scale-110 transition duration-300">
                    <i class="fab fa-node-js text-5xl text-[#68A063] mb-3"></i>
                    <span class="font-medium">Node.js</span>
                </div>
                <div class="p-4 flex flex-col items-center hover:transform hover:scale-110 transition duration-300">
                    <i class="fab fa-php text-5xl text-[#777BB3] mb-3"></i>
                    <span class="font-medium">PHP/Laravel</span>
                </div>
                <div class="p-4 flex flex-col items-center hover:transform hover:scale-110 transition duration-300">
                    <i class="fab fa-python text-5xl text-[#3776AB] mb-3"></i>
                    <span class="font-medium">Python</span>
                </div>
                <div class="p-4 flex flex-col items-center hover:transform hover:scale-110 transition duration-300">
                    <i class="fab fa-android text-5xl text-[#3DDC84] mb-3"></i>
                    <span class="font-medium">Android</span>
                </div>
                <div class="p-4 flex flex-col items-center hover:transform hover:scale-110 transition duration-300">
                    <i class="fab fa-swift text-5xl text-[#F05138] mb-3"></i>
                    <span class="font-medium">Swift</span>
                </div>
                <div class="p-4 flex flex-col items-center hover:transform hover:scale-110 transition duration-300">
                    <i class="fab fa-aws text-5xl text-[#FF9900] mb-3"></i>
                    <span class="font-medium">AWS</span>
                </div>
                <div class="p-4 flex flex-col items-center hover:transform hover:scale-110 transition duration-300">
                    <i class="fab fa-docker text-5xl text-[#2496ED] mb-3"></i>
                    <span class="font-medium">Docker</span>
                </div>
                <div class="p-4 flex flex-col items-center hover:transform hover:scale-110 transition duration-300">
                    <i class="fab fa-vuejs text-5xl text-[#4FC08D] mb-3"></i>
                    <span class="font-medium">Vue.js</span>
                </div>
                <div class="p-4 flex flex-col items-center hover:transform hover:scale-110 transition duration-300">
                    <i class="fab fa-wordpress text-5xl text-[#21759B] mb-3"></i>
                    <span class="font-medium">WordPress</span>
                </div>
                <div class="p-4 flex flex-col items-center hover:transform hover:scale-110 transition duration-300">
                    <i class="fas fa-database text-5xl text-[#F29111] mb-3"></i>
                    <span class="font-medium">SQL/NoSQL</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Case Studies Preview -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-[10%]">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold">Success <span class="text-[#00B7FF]">Stories</span></h2>
                <p class="text-gray-600 mt-4 max-w-3xl mx-auto">Real projects we've delivered for real clients</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Case Study 1 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl transition duration-300">
                    <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="E-commerce Platform" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <span class="inline-block px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-sm font-medium mb-3">E-commerce</span>
                        <h3 class="text-xl font-semibold mb-2">Fashion Retailer Platform</h3>
                        <p class="text-gray-600 mb-4">
                            Developed a complete e-commerce solution with inventory management and customer analytics.
                        </p>
                        <a href="#" class="text-[#00B7FF] font-medium hover:underline">Read Case Study</a>
                    </div>
                </div>
                
                <!-- Case Study 2 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl transition duration-300">
                    <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Healthcare App" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <span class="inline-block px-3 py-1 bg-green-100 text-green-600 rounded-full text-sm font-medium mb-3">Healthcare</span>
                        <h3 class="text-xl font-semibold mb-2">Patient Monitoring App</h3>
                        <p class="text-gray-600 mb-4">
                            Created a mobile application for real-time patient monitoring and healthcare provider alerts.
                        </p>
                        <a href="#" class="text-[#00B7FF] font-medium hover:underline">Read Case Study</a>
                    </div>
                </div>
                
                <!-- Case Study 3 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl transition duration-300">
                    <img src="https://images.unsplash.com/photo-1534870439826-4646c8671ba8?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="SaaS Platform" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <span class="inline-block px-3 py-1 bg-purple-100 text-purple-600 rounded-full text-sm font-medium mb-3">SaaS</span>
                        <h3 class="text-xl font-semibold mb-2">Project Management SaaS</h3>
                        <p class="text-gray-600 mb-4">
                            Built a cloud-based project management tool with real-time collaboration features.
                        </p>
                        <a href="#" class="text-[#00B7FF] font-medium hover:underline">Read Case Study</a>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-10">
                <a href="#" class="px-8 py-3 bg-[#00B7FF] text-white font-semibold rounded-full hover:shadow-lg transition duration-300">
                    View All Case Studies
                </a>
            </div>
        </div>
    </section>

    <!-- Pricing -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-[10%]">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold">Flexible <span class="text-[#00B7FF]">Pricing</span></h2>
                <p class="text-gray-600 mt-4 max-w-3xl mx-auto">Choose the engagement model that works best for your business</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Fixed Price -->
                <div class="bg-white p-8 rounded-xl shadow-md border border-gray-100 hover:shadow-xl transition duration-300">
                    <div class="text-center mb-6">
                        <div class="w-16 h-16 bg-[#f1f8ff] rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-tag text-[#00B7FF] text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold">Fixed Price</h3>
                    </div>
                    <p class="text-gray-600 mb-6 text-center">Perfect for projects with well-defined requirements and scope.</p>
                    <ul class="mb-8 space-y-3">
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Clear project deliverables</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Fixed timeline</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Predetermined budget</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Milestone-based payments</span>
                        </li>
                    </ul>
                    <div class="text-center">
                        <a href="{{ route('contact') }}" class="inline-block px-6 py-3 bg-[#00B7FF] text-white font-medium rounded-full hover:shadow-lg transition duration-300">
                            Get Quote
                        </a>
                    </div>
                </div>
                
                <!-- Time & Material -->
                <div class="bg-[#00B7FF] text-white p-8 rounded-xl shadow-md hover:shadow-xl transition duration-300 transform scale-105">
                    <div class="absolute top-4 right-4">
                        <span class="bg-white text-[#00B7FF] text-xs font-bold px-3 py-1 rounded-full">POPULAR</span>
                    </div>
                    <div class="text-center mb-6">
                        <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-clock text-[#00B7FF] text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold">Time & Material</h3>
                    </div>
                    <p class="text-white mb-6 text-center">Ideal for projects with evolving requirements and ongoing development.</p>
                    <ul class="mb-8 space-y-3">
                        <li class="flex items-center">
                            <i class="fas fa-check mr-2"></i>
                            <span>Flexible scope</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check mr-2"></i>
                            <span>Hourly or monthly billing</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check mr-2"></i>
                            <span>Transparent progress tracking</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check mr-2"></i>
                            <span>Scale team as needed</span>
                        </li>
                    </ul>
                    <div class="text-center">
                        <a href="{{ route('contact') }}" class="inline-block px-6 py-3 bg-white text-[#00B7FF] font-medium rounded-full hover:shadow-lg transition duration-300">
                            Get Quote
                        </a>
                    </div>
                </div>
                
                <!-- Dedicated Team -->
                <div class="bg-white p-8 rounded-xl shadow-md border border-gray-100 hover:shadow-xl transition duration-300">
                    <div class="text-center mb-6">
                        <div class="w-16 h-16 bg-[#f1f8ff] rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-users text-[#00B7FF] text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold">Dedicated Team</h3>
                    </div>
                    <p class="text-gray-600 mb-6 text-center">Perfect for long-term projects and ongoing development needs.</p>
                    <ul class="mb-8 space-y-3">
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Full-time dedicated developers</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Direct team management</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Monthly billing</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Customizable team composition</span>
                        </li>
                    </ul>
                    <div class="text-center">
                        <a href="{{ route('contact') }}" class="inline-block px-6 py-3 bg-[#00B7FF] text-white font-medium rounded-full hover:shadow-lg transition duration-300">
                            Get Quote
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-[10%]">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold">Client <span class="text-[#00B7FF]">Testimonials</span></h2>
                <p class="text-gray-600 mt-4 max-w-3xl mx-auto">What our clients say about working with us</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-white p-8 rounded-xl shadow-md relative">
                    <div class="text-[#00B7FF] text-4xl absolute -top-5 left-8">❝</div>
                    <p class="text-gray-600 mb-6 mt-2 italic">
                        "Comestro delivered our e-commerce platform ahead of schedule. Their attention to detail and focus on user experience resulted in a 40% increase in our online sales."
                    </p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 rounded-full overflow-hidden mr-4">
                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Client" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h4 class="font-semibold">John Anderson</h4>
                            <p class="text-gray-500 text-sm">CEO, FashionRetail Inc.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 2 -->
                <div class="bg-white p-8 rounded-xl shadow-md relative">
                    <div class="text-[#00B7FF] text-4xl absolute -top-5 left-8">❝</div>
                    <p class="text-gray-600 mb-6 mt-2 italic">
                        "Working with the Comestro team was a game-changer for our healthcare app. They understood our complex requirements and delivered a secure, user-friendly solution."
                    </p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 rounded-full overflow-hidden mr-4">
                            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Client" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h4 class="font-semibold">Sarah Miller</h4>
                            <p class="text-gray-500 text-sm">Director, HealthTech Solutions</p>
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 3 -->
                <div class="bg-white p-8 rounded-xl shadow-md relative">
                    <div class="text-[#00B7FF] text-4xl absolute -top-5 left-8">❝</div>
                    <p class="text-gray-600 mb-6 mt-2 italic">
                        "The MVP Comestro created for us in just one week allowed us to secure funding and validate our business idea quickly. Truly exceptional service!"
                    </p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 rounded-full overflow-hidden mr-4">
                            <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Client" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h4 class="font-semibold">Michael Thompson</h4>
                            <p class="text-gray-500 text-sm">Founder, StartupVision</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-[10%]">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold">Frequently Asked <span class="text-[#00B7FF]">Questions</span></h2>
                <p class="text-gray-600 mt-4 max-w-3xl mx-auto">Common questions about our services and processes</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-gray-50 p-6 rounded-xl">
                    <h3 class="text-xl font-semibold mb-3">How long does it typically take to develop a web application?</h3>
                    <p class="text-gray-600">
                        The timeline varies based on complexity. Simple websites can be completed in 2-4 weeks, while complex web applications may take 3-6 months. We provide detailed timelines during our initial project planning phase.
                    </p>
                </div>
                
                <div class="bg-gray-50 p-6 rounded-xl">
                    <h3 class="text-xl font-semibold mb-3">What is your process for ensuring quality?</h3>
                    <p class="text-gray-600">
                        We implement rigorous quality assurance testing throughout the development lifecycle, including code reviews, automated testing, performance testing, and UAT (User Acceptance Testing).
                    </p>
                </div>
                
                <div class="bg-gray-50 p-6 rounded-xl">
                    <h3 class="text-xl font-semibold mb-3">Do you provide maintenance and support after launch?</h3>
                    <p class="text-gray-600">
                        Yes, we offer ongoing maintenance and support packages to ensure your solution continues to run smoothly. These packages include regular updates, security patches, and technical support.
                    </p>
                </div>
                
                <div class="bg-gray-50 p-6 rounded-xl">
                    <h3 class="text-xl font-semibold mb-3">What kind of businesses do you typically work with?</h3>
                    <p class="text-gray-600">
                        We work with businesses of all sizes, from startups to enterprise organizations, across various industries including healthcare, finance, retail, education, and more.
                    </p>
                </div>
                
                <div class="bg-gray-50 p-6 rounded-xl">
                    <h3 class="text-xl font-semibold mb-3">How do you handle project communication and updates?</h3>
                    <p class="text-gray-600">
                        We maintain transparent communication through weekly progress reports, regular video calls, and project management tools that give you real-time visibility into development status.
                    </p>
                </div>
                
                <div class="bg-gray-50 p-6 rounded-xl">
                    <h3 class="text-xl font-semibold mb-3">What is the cost of developing an app?</h3>
                    <p class="text-gray-600">
                        App development costs vary widely based on features, complexity, and platforms. We provide detailed quotes after understanding your specific requirements. Our free consultation can help you get a ballpark figure.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-16 bg-gradient-to-r from-[#00B7FF] to-[#0099CC] text-white">
        <div class="container mx-auto px-[10%] text-center">
            <h2 class="text-3xl font-bold mb-6">Ready to Transform Your Business?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">
                Let's discuss your project requirements and start building something amazing together.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="{{ route('contact') }}" class="px-8 py-3 bg-white text-[#00B7FF] font-semibold rounded-full hover:shadow-lg transition duration-300">
                    Contact Us
                </a>
                <a href="{{ route('about') }}" class="px-8 py-3 bg-transparent border-2 border-white text-white font-semibold rounded-full hover:bg-white hover:text-[#00B7FF] transition duration-300">
                    Learn More About Us
                </a>
            </div>
        </div>
    </section>
@endsection