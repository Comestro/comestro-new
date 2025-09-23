@extends('admin.layouts.app')

@section('title', 'Project Details')

@section('content')
<div class="bg-white rounded-lg shadow-sm p-6">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-semibold text-gray-800">{{ $project->title }}</h2>
        <div class="space-x-2">
            <a href="{{ url('/admin/projects/' . $project->id . '/edit') }}" 
               class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-md inline-flex items-center">
                <i class="fas fa-edit mr-2"></i> Edit
            </a>
            <a href="{{ url('/admin/projects') }}" 
               class="bg-gray-200 hover:bg-gray-300 text-gray-800 py-2 px-4 rounded-md inline-flex items-center">
                <i class="fas fa-arrow-left mr-2"></i> Back to Projects
            </a>
        </div>
    </div>

    <!-- Project Status & Info -->
    <div class="mb-6">
        <div class="flex flex-wrap gap-3 mb-4">
            @if($project->active)
                <span class="px-3 py-1 inline-flex text-sm leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                    <i class="fas fa-check-circle mr-1"></i> Active
                </span>
            @else
                <span class="px-3 py-1 inline-flex text-sm leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">
                    <i class="fas fa-times-circle mr-1"></i> Draft
                </span>
            @endif

            @if($project->featured)
                <span class="px-3 py-1 inline-flex text-sm leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                    <i class="fas fa-star mr-1"></i> Featured
                </span>
            @endif

            <span class="px-3 py-1 inline-flex text-sm leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                <i class="fas fa-folder mr-1"></i> {{ $project->category }}
            </span>

            @if($project->completion_date)
                <span class="px-3 py-1 inline-flex text-sm leading-5 font-semibold rounded-full bg-purple-100 text-purple-800">
                    <i class="fas fa-calendar-check mr-1"></i> Completed: {{ date('M d, Y', strtotime($project->completion_date)) }}
                </span>
            @endif

            @if($project->order > 0)
                <span class="px-3 py-1 inline-flex text-sm leading-5 font-semibold rounded-full bg-indigo-100 text-indigo-800">
                    <i class="fas fa-sort-numeric-down mr-1"></i> Order: {{ $project->order }}
                </span>
            @endif
        </div>
    </div>

    <!-- Project Content -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Left Column -->
        <div class="md:col-span-2">
            <div class="bg-gray-50 rounded-lg p-6 mb-6">
                <h3 class="text-lg font-medium text-gray-700 mb-4 border-b pb-2">Project Description</h3>
                <p class="text-gray-600 mb-4">{{ $project->description }}</p>
                
                <h3 class="text-lg font-medium text-gray-700 mb-4 border-b pb-2">Full Content</h3>
                <div class="prose max-w-none text-gray-600">
                    {!! $project->content !!}
                </div>
            </div>
        </div>
        
        <!-- Right Column -->
        <div class="md:col-span-1">
            <!-- Project Image -->
            <div class="bg-gray-50 rounded-lg p-6 mb-6">
                <h3 class="text-lg font-medium text-gray-700 mb-4 border-b pb-2">Project Image</h3>
                <div class="aspect-w-16 aspect-h-9 rounded-md overflow-hidden mb-4">
                    @if($project->image)
                        <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="object-cover w-full h-full">
                    @else
                        <div class="w-full h-full bg-gray-200 flex items-center justify-center">
                            <i class="fas fa-image text-gray-400 text-4xl"></i>
                        </div>
                    @endif
                </div>
                @if($project->image)
                <div class="text-center">
                    <a href="{{ asset('storage/' . $project->image) }}" target="_blank" class="text-blue-600 hover:text-blue-800 text-sm">
                        <i class="fas fa-external-link-alt mr-1"></i> View Full Size
                    </a>
                </div>
                @endif
            </div>
            
            <!-- Project Details -->
            <div class="bg-gray-50 rounded-lg p-6 mb-6">
                <h3 class="text-lg font-medium text-gray-700 mb-4 border-b pb-2">Project Details</h3>
                <div class="space-y-3">
                    @if($project->client_name)
                    <div class="flex items-start">
                        <span class="flex-shrink-0 text-gray-500 w-24">Client:</span>
                        <span class="text-gray-800">{{ $project->client_name }}</span>
                    </div>
                    @endif
                    
                    @if($project->technologies)
                    <div class="flex items-start">
                        <span class="flex-shrink-0 text-gray-500 w-24">Technologies:</span>
                        <div class="flex flex-wrap gap-1">
                            @foreach(explode(',', $project->technologies) as $tech)
                                <span class="bg-gray-200 text-gray-800 text-xs px-2 py-1 rounded">{{ trim($tech) }}</span>
                            @endforeach
                        </div>
                    </div>
                    @endif
                    
                    <div class="flex items-start">
                        <span class="flex-shrink-0 text-gray-500 w-24">Created:</span>
                        <span class="text-gray-800">{{ $project->created_at->format('M d, Y') }}</span>
                    </div>
                    
                    <div class="flex items-start">
                        <span class="flex-shrink-0 text-gray-500 w-24">Last Updated:</span>
                        <span class="text-gray-800">{{ $project->updated_at->format('M d, Y') }}</span>
                    </div>
                    
                    @if($project->website_url)
                    <div class="flex items-start">
                        <span class="flex-shrink-0 text-gray-500 w-24">Website:</span>
                        <a href="{{ $project->website_url }}" target="_blank" class="text-blue-600 hover:text-blue-800 break-all">
                            {{ $project->website_url }}
                        </a>
                    </div>
                    @endif
                    
                    @if($project->case_study_url)
                    <div class="flex items-start">
                        <span class="flex-shrink-0 text-gray-500 w-24">Case Study:</span>
                        <a href="{{ $project->case_study_url }}" target="_blank" class="text-blue-600 hover:text-blue-800 break-all">
                            {{ $project->case_study_url }}
                        </a>
                    </div>
                    @endif
                    
                    <div class="flex items-start">
                        <span class="flex-shrink-0 text-gray-500 w-24">URL Slug:</span>
                        <span class="text-gray-800">{{ $project->slug }}</span>
                    </div>
                </div>
            </div>
            
            <!-- Action Buttons -->
            <div class="bg-gray-50 rounded-lg p-6">
                <h3 class="text-lg font-medium text-gray-700 mb-4 border-b pb-2">Actions</h3>
                <div class="space-y-3">
                    <a href="{{ url('/portfolio/' . $project->slug) }}" target="_blank" 
                       class="block w-full bg-gray-200 hover:bg-gray-300 text-gray-800 text-center py-2 px-4 rounded-md">
                        <i class="fas fa-external-link-alt mr-2"></i> View on Website
                    </a>
                    
                    <form action="{{ url('/admin/projects/' . $project->id . '/toggle-status') }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="block w-full bg-{{ $project->active ? 'red' : 'green' }}-600 hover:bg-{{ $project->active ? 'red' : 'green' }}-700 text-white text-center py-2 px-4 rounded-md">
                            <i class="fas fa-{{ $project->active ? 'times' : 'check' }}-circle mr-2"></i>
                            {{ $project->active ? 'Mark as Draft' : 'Mark as Active' }}
                        </button>
                    </form>
                    
                    <form action="{{ url('/admin/projects/' . $project->id . '/toggle-featured') }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="block w-full bg-{{ $project->featured ? 'gray' : 'yellow' }}-600 hover:bg-{{ $project->featured ? 'gray' : 'yellow' }}-700 text-white text-center py-2 px-4 rounded-md">
                            <i class="fas fa-star mr-2"></i>
                            {{ $project->featured ? 'Remove from Featured' : 'Mark as Featured' }}
                        </button>
                    </form>
                    
                    <form action="{{ url('/admin/projects/' . $project->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this project? This action cannot be undone.')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="block w-full bg-red-600 hover:bg-red-700 text-white text-center py-2 px-4 rounded-md">
                            <i class="fas fa-trash-alt mr-2"></i> Delete Project
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection