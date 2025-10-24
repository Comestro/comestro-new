@extends('admin.layouts.app')
@section('title', 'Admin Settings')

@section('content')
<div x-data="{ tab: 'general' }" class="min-h-screen bg-gray-50 py-10 px-6">
    <div class="max-w-5xl mx-auto bg-white rounded-2xl shadow-lg overflow-hidden">
        
        <!-- Header -->
        <div class="bg-gradient-to-r from-[#0079C1] to-blue-700 px-8 py-6 text-white">
            <h1 class="text-3xl font-bold flex items-center gap-3">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37 1 .685 2.018.714 2.573 1.066z"/>
                </svg>
                Admin Settings
            </h1>
            <p class="mt-2 text-blue-100 text-sm">Manage preferences, security, and account options</p>
        </div>

        <!-- Tabs -->
        <div class="border-b flex bg-gray-100">
            <button @click="tab='general'" 
                    :class="tab==='general' ? 'border-b-4 border-[#0079C1] text-[#0079C1]' : 'text-gray-600 hover:text-[#0079C1]'"
                    class="w-1/2 py-4 font-medium text-center transition-all">
                ⚙️ General Settings
            </button>
            <button @click="tab='security'" 
                    :class="tab==='security' ? 'border-b-4 border-[#0079C1] text-[#0079C1]' : 'text-gray-600 hover:text-[#0079C1]'"
                    class="w-1/2 py-4 font-medium text-center transition-all">
                🔐 Security Settings
            </button>
        </div>

        <!-- Tab Content -->
        <div class="p-8 space-y-10">
            
            <!-- GENERAL SETTINGS -->
            <div x-show="tab==='general'" x-transition>
                <h2 class="text-2xl font-semibold text-gray-800 mb-6">Site Preferences</h2>

                <form>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Site Name</label>
                            <input type="text" placeholder="Your Website Name" 
                                   class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#0079C1] focus:outline-none">
                        </div>

                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Admin Email</label>
                            <input type="email" placeholder="admin@example.com" 
                                   class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#0079C1] focus:outline-none">
                        </div>

                        <div class="flex items-center gap-3 mt-4">
                            <input id="darkMode" type="checkbox" class="w-5 h-5 text-[#0079C1] border-gray-300 rounded focus:ring-[#0079C1]">
                            <label for="darkMode" class="text-gray-700">Enable Dark Mode</label>
                        </div>

                        <div class="flex items-center gap-3 mt-4">
                            <input id="notifications" type="checkbox" class="w-5 h-5 text-[#0079C1] border-gray-300 rounded focus:ring-[#0079C1]">
                            <label for="notifications" class="text-gray-700">Email Notifications</label>
                        </div>
                    </div>
                </form>
            </div>

            <!-- SECURITY SETTINGS -->
            <div x-show="tab==='security'" x-transition>
                <h2 class="text-2xl font-semibold text-gray-800 mb-6">Change Password</h2>

                <form class="space-y-6">
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Current Password</label>
                        <input type="password" placeholder="Enter current password" 
                               class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#0079C1] focus:outline-none">
                    </div>

                    <div>
                        <label class="block text-gray-700 font-medium mb-2">New Password</label>
                        <input type="password" placeholder="Enter new password" 
                               class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#0079C1] focus:outline-none">
                    </div>

                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Confirm New Password</label>
                        <input type="password" placeholder="Re-enter new password" 
                               class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#0079C1] focus:outline-none">
                    </div>
                </form>
            </div>

            <!-- Action Buttons -->
            <div class="pt-6 border-t flex justify-end gap-4">
                <button class="inline-flex items-center gap-2 px-6 py-3 bg-gray-200 text-gray-700 font-medium rounded-xl hover:bg-gray-300 transition-all duration-200 shadow-md hover:shadow-lg">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                              d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                    Cancel
                </button>
                <button class="inline-flex items-center gap-2 px-6 py-3 bg-[#0079C1] text-white font-medium rounded-xl hover:bg-blue-700 transition-all duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                              d="M5 13l4 4L19 7"/>
                    </svg>
                    Save Changes
                </button>
            </div>
        </div>
    </div>
</div>
@endsection