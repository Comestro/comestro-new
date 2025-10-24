@extends('admin.layouts.app') 
@section('title', 'View Message')

@section('content')
<div class="min-h-screen bg-gray-50 py-8 px-4 sm:px-6 lg:px-8">
    <div class="max-w-4xl mx-auto">
        <!-- Card Container -->
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
            <!-- Header -->
            <div class="bg-gradient-to-r from-[#0079C1] to-blue-700 px-8 py-6 text-white">
                <h1 class="text-3xl font-bold flex items-center gap-3">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                              d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    Message Details
                </h1>
            </div>

            <!-- Content -->
            <div class="p-8 space-y-8">
                <!-- Info Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="group">
                        <dt class="text-sm font-medium text-gray-500 flex items-center gap-2">
                            <svg class="w-4 h-4 text-[#0079C1]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                      d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                            Full Name
                        </dt>
                        <dd class="mt-1 text-lg font-medium text-gray-900">{{ $message->name }}</dd>
                    </div>

                    <div class="group">
                        <dt class="text-sm font-medium text-gray-500 flex items-center gap-2">
                            <svg class="w-4 h-4 text-[#0079C1]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                      d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            Phone
                        </dt>
                        <dd class="mt-1 text-lg font-medium text-gray-900">{{ $message->phone }}</dd>
                    </div>

                    <div class="group">
                        <dt class="text-sm font-medium text-gray-500 flex items-center gap-2">
                            <svg class="w-4 h-4 text-[#0079C1]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                      d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"/>
                            </svg>
                            Email
                        </dt>
                        <dd class="mt-1 text-lg font-medium text-gray-900 break-all">{{ $message->email }}</dd>
                    </div>

                    <div class="group">
                        <dt class="text-sm font-medium text-gray-500 flex items-center gap-2">
                            <svg class="w-4 h-4 text-[#0079C1]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                      d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"/>
                            </svg>
                            Subject
                        </dt>
                        <dd class="mt-1 text-lg font-medium text-gray-900">{{ $message->subject ?? '-' }}</dd>
                    </div>
                </div>

                <!-- Message Body -->
                <div class="border-t pt-6">
                    <dt class="text-sm font-medium text-gray-500 flex items-center gap-2 mb-3">
                        <svg class="w-4 h-4 text-[#0079C1]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                  d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                        </svg>
                        Message Content
                    </dt>
                    <dd class="bg-gray-50 rounded-lg p-5 text-gray-800 leading-relaxed whitespace-pre-line border border-gray-200">
                        {{ $message->message ?? '-' }}
                    </dd>
                </div>

                <!-- Timestamps -->
                <div class="flex flex-col sm:flex-row sm:justify-between text-sm text-gray-500 border-t pt-5 space-y-2 sm:space-y-0">
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                  d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <span>Received: <span class="font-medium text-gray-700">{{ $message->created_at->format('d M Y, h:i A') }}</span></span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                  d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11.418 9.418V20h-.582m-15.356-2A8.001 8.001 0 004.582 15m0 0H9"/>
                        </svg>
                        <span>Updated: <span class="font-medium text-gray-700">{{ $message->updated_at->format('d M Y, h:i A') }}</span></span>
                    </div>
                </div>
            </div>

            <!-- Footer Action -->
            <div class="bg-gray-50 px-8 py-5 border-t flex justify-end">
                <a href="{{ route('admin.contacts') }}" 
                   class="inline-flex items-center gap-2 px-6 py-3 bg-[#0079C1] hover:bg-blue-700 text-white font-medium rounded-xl shadow-md hover:shadow-lg transition-all duration-200 transform hover:-translate-y-0.5">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                              d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                    </svg>
                    Back to Messages
                </a>
            </div>
        </div>
    </div>
</div>
@endsection