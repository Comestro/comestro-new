@extends('layouts.app')

@section('title', $project->title)

@section('content')
<!-- Page Header -->
<div class="relative bg-gradient-to-r from-blue-600 to-indigo-800 py-16 md:py-24">
    <div class="container mx-auto px-[10%] relative z-10">
        <div class="flex flex-col md:flex-row md:items-center justify-between">
            <div class="mb-6 md:mb-0">
                <h1 class="text-3xl md:text-5xl font-bold text-white mb-4">{{ $project->title }}</h1>
                <p class="text-xl text-blue-100 max-w-3xl">
                    {{ $project->description }}
                </p>
            </div>
            @if($project->website_url)
            <div>
                <a href="{{ $project->website_url }}" target="_blank" 
                   class="inline-block bg-white text-blue-700 hover:bg-blue-50 px-6 py-3 rounded-full font-medium transition-all">
                    <i class="fas fa-external-link-alt mr-2"></i> Visit Website
                </a>
            </div>
            @endif
        </div>
    </div>
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="absolute bottom-0 left-0 right-0">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="w-full h-auto">
            <path fill="#ffffff" fill-opacity="1" d="M0,224L48,213.3C96,203,192,181,288,181.3C384,181,480,203,576,224C672,245,768,267,864,261.3C960,256,1056,224,1152,213.3C1248,203,1344,213,1392,218.7L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </div>
</div>

<!-- Project Details -->
<div class="py-16 bg-white">
    <div class="container mx-auto px-[10%]">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            <!-- Main Content -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-lg overflow-hidden border border-gray-100 mb-8">
                    @if($project->image)
                    <div class="relative aspect-video">
                        <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="w-full h-full object-cover">
                    </div>
                    @endif
                    <div class="p-8">
                        <div class="prose max-w-none">
                            {!! $project->content !!}
                        </div>
                    </div>
                </div>
                
                @if($project->technologies)
                <div class="bg-white rounded-lg border border-gray-100 p-6 mb-8">
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Technologies Used</h3>
                    <div class="flex flex-wrap gap-2">
                        @foreach(explode(',', $project->technologies) as $tech)
                            <span class="bg-blue-50 text-blue-700 px-3 py-1 rounded-full text-sm font-medium">
                                {{ trim($tech) }}
                            </span>
                        @endforeach
                    </div>
                </div>
                @endif
                
                <!-- Related Projects -->
                @if(isset($relatedProjects) && $relatedProjects->count() > 0)
                <div class="mt-12">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6">Related Projects</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        @foreach($relatedProjects as $relatedProject)
                        <div class="bg-white rounded-lg border border-gray-100 overflow-hidden transition-transform duration-300 hover:-translate-y-1">
                            @if($relatedProject->image)
                            <div class="aspect-video">
                                <img src="{{ asset('storage/' . $relatedProject->image) }}" alt="{{ $relatedProject->title }}" class="w-full h-full object-cover">
                            </div>
                            @endif
                            <div class="p-6">
                                <span class="inline-block px-2 py-1 bg-blue-100 text-blue-700 text-xs font-medium rounded-full mb-2">
                                    {{ $relatedProject->category }}
                                </span>
                                <h4 class="text-xl font-bold text-gray-800 mb-2">{{ $relatedProject->title }}</h4>
                                <p class="text-gray-600 mb-4">{{ Str::limit($relatedProject->description, 100) }}</p>
                                <a href="{{ url('/portfolio/' . $relatedProject->slug) }}" class="text-blue-600 hover:text-blue-800 font-medium">
                                    Learn More <i class="fas fa-arrow-right ml-1"></i>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>
            
            <!-- Sidebar -->
            <div class="lg:col-span-1">
                <div class="bg-white rounded-lg border border-gray-100 p-6 mb-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Project Details</h3>
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 mr-3">
                                <i class="fas fa-folder"></i>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">Category</p>
                                <p class="font-medium">{{ $project->category }}</p>
                            </div>
                        </div>
                        
                        @if($project->client_name)
                        <div class="flex items-center">
                            <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 mr-3">
                                <i class="fas fa-user"></i>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">Client</p>
                                <p class="font-medium">{{ $project->client_name }}</p>
                            </div>
                        </div>
                        @endif
                        
                        @if($project->completion_date)
                        <div class="flex items-center">
                            <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 mr-3">
                                <i class="fas fa-calendar-check"></i>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">Completion Date</p>
                                <p class="font-medium">{{ date('F Y', strtotime($project->completion_date)) }}</p>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
                
                <div class="bg-gradient-to-r from-blue-600 to-indigo-700 rounded-lg p-6">
                    <h3 class="text-xl font-bold text-white mb-4">Interested in this project?</h3>
                    <p class="text-blue-100 mb-4">Let's discuss how we can create a similar solution for your business.</p>
                    <a href="{{ url('/contact') }}" class="block w-full bg-white text-blue-700 hover:bg-blue-50 text-center py-2 px-4 rounded-md font-medium">
                        Get in Touch
                    </a>
                </div>
                
                @if($project->case_study_url)
                <div class="mt-6">
                    <a href="{{ $project->case_study_url }}" target="_blank" 
                       class="block w-full bg-gray-100 hover:bg-gray-200 text-gray-800 text-center py-3 px-4 rounded-md font-medium">
                        <i class="fas fa-file-alt mr-2"></i> Download Case Study
                    </a>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

<!-- Call to Action -->
<div class="bg-gray-50 py-16">
    <div class="container mx-auto px-[10%] text-center">
        <h2 class="text-3xl font-bold text-gray-800 mb-6">Ready to Start Your Project?</h2>
        <p class="text-xl text-gray-600 mb-8 max-w-2xl mx-auto">
            Our team is ready to help transform your ideas into outstanding digital solutions.
        </p>
        <div class="flex justify-center gap-4 flex-wrap">
            <a href="{{ url('/contact') }}" class="bg-blue-600 hover:bg-blue-700 text-white py-3 px-8 rounded-full font-medium transition-all">
                Contact Us
            </a>
            <a href="{{ url('/services') }}" class="bg-white border border-gray-300 hover:bg-gray-100 text-gray-800 py-3 px-8 rounded-full font-medium transition-all">
                Explore Services
            </a>
        </div>
    </div>
</div>
@endsection