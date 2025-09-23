@extends('admin.layouts.app')

@section('title', 'Create Project')

@section('content')
<div class="bg-white rounded-lg shadow-sm p-6">
    <div class="flex items-center justify-between mb-6">
        <h2 class="text-2xl font-semibold text-gray-800">Create New Project</h2>
        <a href="{{ url('/admin/projects') }}" class="text-gray-600 hover:text-gray-900">
            <i class="fas fa-arrow-left mr-1"></i> Back to Projects
        </a>
    </div>

    <form action="{{ url('/admin/projects') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf
        
        <!-- Basic Information -->
        <div class="bg-gray-50 p-4 rounded-md">
            <h3 class="text-lg font-medium text-gray-700 mb-4">Basic Information</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Title <span class="text-red-500">*</span></label>
                    <input type="text" name="title" id="title" value="{{ old('title') }}" required
                        class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                    @error('title')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <div>
                    <label for="slug" class="block text-sm font-medium text-gray-700 mb-1">Slug <span class="text-red-500">*</span></label>
                    <input type="text" name="slug" id="slug" value="{{ old('slug') }}" required
                        class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                    <p class="text-xs text-gray-500 mt-1">URL-friendly name for your project. Will be auto-generated from title if left empty.</p>
                    @error('slug')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <div>
                    <label for="category" class="block text-sm font-medium text-gray-700 mb-1">Category <span class="text-red-500">*</span></label>
                    <select name="category" id="category" required
                        class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                        <option value="">Select Category</option>
                        <option value="Web Development" {{ old('category') == 'Web Development' ? 'selected' : '' }}>Web Development</option>
                        <option value="Mobile App" {{ old('category') == 'Mobile App' ? 'selected' : '' }}>Mobile App</option>
                        <option value="UI/UX Design" {{ old('category') == 'UI/UX Design' ? 'selected' : '' }}>UI/UX Design</option>
                        <option value="E-commerce" {{ old('category') == 'E-commerce' ? 'selected' : '' }}>E-commerce</option>
                        <option value="Enterprise Solution" {{ old('category') == 'Enterprise Solution' ? 'selected' : '' }}>Enterprise Solution</option>
                    </select>
                    @error('category')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <div>
                    <label for="client_name" class="block text-sm font-medium text-gray-700 mb-1">Client Name</label>
                    <input type="text" name="client_name" id="client_name" value="{{ old('client_name') }}"
                        class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                    @error('client_name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <div>
                    <label for="completion_date" class="block text-sm font-medium text-gray-700 mb-1">Completion Date</label>
                    <input type="date" name="completion_date" id="completion_date" value="{{ old('completion_date') }}"
                        class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                    @error('completion_date')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <div>
                    <label for="technologies" class="block text-sm font-medium text-gray-700 mb-1">Technologies Used</label>
                    <input type="text" name="technologies" id="technologies" value="{{ old('technologies') }}"
                        placeholder="e.g. Laravel, Vue.js, MySQL"
                        class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                    <p class="text-xs text-gray-500 mt-1">Comma separated list of technologies</p>
                    @error('technologies')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>
        
        <!-- Description and Content -->
        <div class="bg-gray-50 p-4 rounded-md">
            <h3 class="text-lg font-medium text-gray-700 mb-4">Description & Content</h3>
            <div class="space-y-4">
                <div>
                    <label for="description" class="block text-sm font-medium text-gray-700 mb-1">
                        Short Description <span class="text-red-500">*</span>
                    </label>
                    <textarea name="description" id="description" rows="3" required
                        class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">{{ old('description') }}</textarea>
                    <p class="text-xs text-gray-500 mt-1">A brief overview of the project (max 250 characters)</p>
                    @error('description')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <div>
                    <label for="content" class="block text-sm font-medium text-gray-700 mb-1">
                        Full Content <span class="text-red-500">*</span>
                    </label>
                    <textarea name="content" id="content" rows="10" required
                        class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">{{ old('content') }}</textarea>
                    <p class="text-xs text-gray-500 mt-1">Detailed project description (supports HTML)</p>
                    @error('content')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>
        
        <!-- Media -->
        <div class="bg-gray-50 p-4 rounded-md">
            <h3 class="text-lg font-medium text-gray-700 mb-4">Media</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="image" class="block text-sm font-medium text-gray-700 mb-1">
                        Project Image <span class="text-red-500">*</span>
                    </label>
                    <input type="file" name="image" id="image" accept="image/*" required
                        class="w-full border border-gray-300 rounded-md p-2">
                    <p class="text-xs text-gray-500 mt-1">Recommended size: 1200x800px (16:9 ratio)</p>
                    @error('image')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <div>
                    <label for="image_preview" class="block text-sm font-medium text-gray-700 mb-1">Preview</label>
                    <div id="image_preview" class="h-32 bg-gray-100 border rounded-md flex items-center justify-center text-gray-400">
                        <i class="fas fa-image text-3xl"></i>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- URLs and Settings -->
        <div class="bg-gray-50 p-4 rounded-md">
            <h3 class="text-lg font-medium text-gray-700 mb-4">URLs & Settings</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="website_url" class="block text-sm font-medium text-gray-700 mb-1">Website URL</label>
                    <input type="url" name="website_url" id="website_url" value="{{ old('website_url') }}"
                        placeholder="https://"
                        class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                    @error('website_url')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <div>
                    <label for="case_study_url" class="block text-sm font-medium text-gray-700 mb-1">Case Study URL</label>
                    <input type="url" name="case_study_url" id="case_study_url" value="{{ old('case_study_url') }}"
                        placeholder="https://"
                        class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                    @error('case_study_url')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="flex space-x-4">
                    <div class="flex items-center">
                        <input type="checkbox" name="featured" id="featured" value="1" {{ old('featured') ? 'checked' : '' }}
                            class="rounded border-gray-300 text-blue-600 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                        <label for="featured" class="ml-2 text-sm text-gray-700">Featured Project</label>
                    </div>
                    
                    <div class="flex items-center">
                        <input type="checkbox" name="active" id="active" value="1" {{ old('active', 1) ? 'checked' : '' }}
                            class="rounded border-gray-300 text-blue-600 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                        <label for="active" class="ml-2 text-sm text-gray-700">Active</label>
                    </div>
                </div>
                
                <div>
                    <label for="order" class="block text-sm font-medium text-gray-700 mb-1">Display Order</label>
                    <input type="number" name="order" id="order" value="{{ old('order', 0) }}" min="0"
                        class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                    <p class="text-xs text-gray-500 mt-1">Lower numbers display first (0 for automatic)</p>
                    @error('order')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>
        
        <!-- Submit Button -->
        <div class="flex justify-end pt-4">
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-6 rounded-md">
                <i class="fas fa-save mr-2"></i> Create Project
            </button>
        </div>
    </form>
</div>
@endsection

@section('scripts')
// Image preview script
document.getElementById('image').addEventListener('change', function(event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            const preview = document.getElementById('image_preview');
            preview.innerHTML = '<img src="' + e.target.result + '" class="h-full w-full object-contain">';
        }
        reader.readAsDataURL(file);
    }
});

// Slug generator
document.getElementById('title').addEventListener('input', function(e) {
    const slugInput = document.getElementById('slug');
    if (!slugInput.value) {
        slugInput.value = e.target.value
            .toLowerCase()
            .replace(/[^\w ]+/g, '')
            .replace(/ +/g, '-');
    }
});
@endsection