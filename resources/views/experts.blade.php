    @extends('layouts.app')
    @section('title', 'Our Experts')

    @section('content')
    <div class="max-w-7xl mx-auto px-6 py-20">
        <h1 class="text-4xl font-bold text-center text-[#0079C1] mb-10">Meet Our Experts</h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            @forelse ($experts as $expert)
                <div class="bg-white shadow-lg rounded-2xl overflow-hidden hover:-translate-y-2 transition-transform duration-300">
                    <div class="flex flex-col items-center p-6">
                        
                        {{-- Profile Image --}}
                        @if ($expert->image)
                            <img src="{{ asset('storage/' . $expert->image) }}" 
                                alt="{{ $expert->name }}"
                                class="w-28 h-28 object-cover rounded-full shadow-md border-4 border-blue-100">
                        @else
                            <img src="{{ asset('images/default-user.png') }}" 
                                alt="Default Image"
                                class="w-28 h-28 object-cover rounded-full shadow-md border-4 border-blue-100">
                        @endif

                        {{-- Info Section --}}
                        <h2 class="mt-4 text-xl font-semibold text-gray-800">{{ $expert->name }}</h2>
                        <p class="text-sm text-[#0079C1] font-medium">{{ $expert->skill }}</p>
                        <p class="text-gray-600 text-sm mt-2 text-center">
                            {{ Str::limit($expert->bio ?? 'This expert has not added a bio yet.', 90) }}
                        </p>

                        {{-- Optional contact icons --}}
                        <div class="flex justify-center mt-4 space-x-3">
                            @if($expert->email)
                                <a href="mailto:{{ $expert->email }}" class="text-gray-500 hover:text-blue-600 transition">
                                    <i class="bi bi-envelope-fill text-lg"></i>
                                </a>
                            @endif
                            @if($expert->linkedin)
                                <a href="{{ $expert->linkedin }}" target="_blank" class="text-gray-500 hover:text-blue-600 transition">
                                    <i class="bi bi-linkedin text-lg"></i>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
               
            @empty
                <div class="col-span-full text-center text-gray-500">
                    <p class="text-lg">No experts available at the moment.</p>
                </div>
            @endforelse
        </div>
    </div>
    
    @endsection
    
