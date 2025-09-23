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
                <button class="filter-btn px-6 py-2 bg-[#00B7FF] text-white rounded-full hover:bg-[#0099cc] transition duration-200" data-filter="all">
                    All Projects
                </button>
                
                @php
                    $categories = $projects->pluck('category')->unique();
                @endphp
                
                @foreach($categories as $category)
                    <button class="filter-btn px-6 py-2 bg-white text-gray-700 rounded-full hover:bg-gray-100 transition duration-200" data-filter="{{ Str::slug($category) }}">
                        {{ $category }}
                    </button>
                @endforeach
            </div>
            
            <!-- Projects List - Alternating Layout -->
            <div class="space-y-16 mb-16">
                @forelse($projects as $index => $project)
                    <div class="project-item bg-white rounded-xl border border-gray-100 overflow-hidden transition-all duration-300" data-category="{{ Str::slug($project->category) }}">
                        <div class="grid md:grid-cols-2 {{ $index % 2 == 0 ? '' : 'md:flex-row-reverse' }} items-center">
                            <!-- Project Image -->
                            <div class="relative h-80 md:h-full">
                                @if($project->image)
                                    <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="w-full h-full object-cover">
                                @else
                                    <div class="bg-gray-100 w-full h-full flex items-center justify-center">
                                        <i class="fas fa-image text-gray-300 text-5xl"></i>
                                    </div>
                                @endif
                                
                                @if($project->featured)
                                    <div class="absolute top-4 right-4 px-3 py-1 bg-yellow-500 text-white text-sm font-semibold rounded-md">
                                        <i class="fas fa-star mr-1"></i> Featured
                                    </div>
                                @endif
                                
                                <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent md:hidden"></div>
                            </div>
                            
                            <!-- Project Details -->
                            <div class="p-8 md:p-10 {{ $index % 2 == 0 ? '' : 'md:order-first' }}">
                                <div class="flex items-center mb-4">
                                    <span class="px-3 py-1 bg-blue-100 text-blue-700 text-sm font-medium rounded-md">
                                        {{ $project->category }}
                                    </span>
                                    @if($project->completion_date)
                                        <span class="mx-3 text-gray-300">|</span>
                                        <span class="text-gray-500 text-sm">
                                            <i class="far fa-calendar-alt mr-1"></i>
                                            {{ \Carbon\Carbon::parse($project->completion_date)->format('M Y') }}
                                        </span>
                                    @endif
                                </div>
                                
                                <h3 class="text-2xl md:text-3xl font-bold text-gray-800 mb-3">{{ $project->title }}</h3>
                                <p class="text-gray-600 mb-6 leading-relaxed">{{ $project->description }}</p>
                                
                                @if($project->technologies)
                                <div class="mb-6">
                                    <h4 class="text-sm font-semibold text-gray-500 uppercase mb-2">Technologies</h4>
                                    <div class="flex flex-wrap gap-2">
                                        @foreach(explode(',', $project->technologies) as $tech)
                                            <span class="bg-gray-100 text-gray-700 px-2 py-1 text-xs font-medium rounded">
                                                {{ trim($tech) }}
                                            </span>
                                        @endforeach
                                    </div>
                                </div>
                                @endif
                                
                                <div class="flex flex-wrap gap-3 mt-6">
                                    <a href="{{ url('/portfolio/' . $project->slug) }}" class="inline-flex items-center px-5 py-2 bg-[#00B7FF] text-white font-medium rounded-md hover:bg-[#0099cc] transition duration-200">
                                        <i class="fas fa-eye mr-2"></i> View Project
                                    </a>
                                    
                                    @if($project->website_url)
                                        <a href="{{ $project->website_url }}" target="_blank" class="inline-flex items-center px-5 py-2 border border-gray-300 text-gray-700 font-medium rounded-md hover:bg-gray-50 transition duration-200">
                                            <i class="fas fa-external-link-alt mr-2"></i> Live Preview
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="py-20 text-center">
                        <div class="w-20 h-20 mx-auto mb-6 flex items-center justify-center rounded-full bg-gray-100">
                            <i class="fas fa-folder-open text-gray-400 text-3xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-700 mb-2">No Projects Found</h3>
                        <p class="text-gray-500 max-w-md mx-auto">We're currently working on adding our portfolio projects. Please check back soon!</p>
                    </div>
                @endforelse
            </div>
            
            @if($projects->count() > 0 && $projects->count() % 6 === 0)
            <div class="text-center">
                <a href="{{ url('/portfolio') }}?page=2" class="px-8 py-3 bg-[#00B7FF] text-white font-semibold rounded-full transition duration-300">
                    Load More Projects
                </a>
            </div>
            @endif
        </div>
    </section>

    <!-- Case Study Feature -->
    <section class="py-16 bg-gradient-to-b from-white to-[#f8f9fa]">
        <div class="container mx-auto px-[10%]">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold">Featured <span class="text-[#00B7FF]">Case Study</span></h2>
                <p class="text-gray-600 mt-4 max-w-3xl mx-auto">A deep dive into one of our most successful projects</p>
            </div>
            
            <div class="bg-white rounded-xl border border-gray-100 overflow-hidden">
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
                <a href="{{ route('contact') }}" class="px-8 py-3 bg-white text-[#00B7FF] font-semibold rounded-full transition duration-300">
                    Start a Project
                </a>
                <a href="{{ route('services') }}" class="px-8 py-3 bg-transparent border-2 border-white text-white font-semibold rounded-full hover:bg-white hover:text-[#00B7FF] transition duration-300">
                    Explore Services
                </a>
            </div>
        </div>
    </section>

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get all filter buttons and project items
        const filterBtns = document.querySelectorAll('.filter-btn');
        const projectItems = document.querySelectorAll('.project-item');
        
        // Add click event to each filter button
        filterBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                // Get the filter value
                const filterValue = this.getAttribute('data-filter');
                
                // Remove active class from all buttons
                filterBtns.forEach(btn => {
                    btn.classList.remove('bg-[#00B7FF]', 'text-white');
                    btn.classList.add('bg-white', 'text-gray-700');
                });
                
                // Add active class to clicked button
                this.classList.remove('bg-white', 'text-gray-700');
                this.classList.add('bg-[#00B7FF]', 'text-white');
                
                // Filter projects
                projectItems.forEach(item => {
                    if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
                
                // Smooth animation for filtering
                projectItems.forEach(item => {
                    item.classList.add('opacity-0');
                    setTimeout(() => {
                        if (item.style.display !== 'none') {
                            item.classList.remove('opacity-0');
                        }
                    }, 300);
                });
            });
        });
    });
</script>
@endsection
@endsection