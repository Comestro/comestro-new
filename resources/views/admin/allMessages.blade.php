@extends('admin.layouts.app')

@section('title', 'All Messages')

@section('content')
<div class="max-w-7xl ">

    {{-- Header --}}
    <div class="flex items-center justify-between mb-8">
        <div class="flex items-center space-x-3">
            <img src="{{ asset('logo.png') }}" alt="Logo" class="h-12 w-12 rounded-full shadow-sm">
            <h1 class="text-3xl font-bold text-gray-800">All Contact Messages</h1>
        </div>
        <div class="text-sm text-gray-500">
            {{ now()->format('d M, Y') }}
        </div>
    </div>

    {{-- Success Message --}}
    @if(session('success'))
        <div class="bg-green-100 border border-green-300 text-green-800 px-5 py-3 rounded-lg mb-6 shadow-sm">
            {{ session('success') }}
        </div>
    @endif

    {{-- Table Container --}}
    <div class="max-w-7xl mx-auto px-6 py-10">
    <div class="bg-white shadow-lg rounded-xl border border-gray-200">
        <div class="max-h-[600px] overflow-y-auto">
            <table class="min-w-full divide-y divide-gray-200 text-sm">
                <thead class="bg-gray-100 sticky top-0 z-10 shadow-sm">
                    <tr>
                        <th class="px-6 py-3 text-left font-semibold text-gray-600 uppercase tracking-wider">#</th>
                        <th class="px-6 py-3 text-left font-semibold text-gray-600 uppercase tracking-wider">Name</th>
                        <th class="px-6 py-3 text-left font-semibold text-gray-600 uppercase tracking-wider">Email</th>
                        <th class="px-6 py-3 text-left font-semibold text-gray-600 uppercase tracking-wider">Phone</th>
                        <th class="px-6 py-3 text-left font-semibold text-gray-600 uppercase tracking-wider">Subject</th>
                        <th class="px-6 py-3 text-left font-semibold text-gray-600 uppercase tracking-wider">Message</th>
                        <th class="px-6 py-3 text-left font-semibold text-gray-600 uppercase tracking-wider">Received</th>
                        <th class="px-6 py-3 text-center font-semibold text-gray-600 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-200">
                    @forelse($messages as $msg)
                        <tr class="hover:bg-gray-50 transition duration-200">
                            <td class="px-6 py-4 text-gray-700">{{ $loop->iteration }}</td>
                            <td class="px-6 py-4 text-gray-800 font-medium">{{ $msg->name }}</td>
                            <td class="px-6 py-4 text-blue-600 hover:underline">{{ $msg->email }}</td>
                            <td class="px-6 py-4 text-gray-700">{{ $msg->phone ?? '-' }}</td>
                            <td class="px-6 py-4 text-gray-700">{{ $msg->subject ?? '-' }}</td>
                            <td class="px-6 py-4 text-gray-600 max-w-[250px] truncate" title="{{ $msg->message }}">
                                {{ $msg->message }}
                            </td>
                            <td class="px-6 py-4 text-gray-500">{{ $msg->created_at->format('d M, Y h:i A') }}</td>
                            <td class="px-6 py-4 text-center flex justify-center space-x-3">
                                <a href="" class="text-indigo-600 hover:text-indigo-800 flex items-center space-x-1">
                                    <i class="fas fa-eye"></i>
                                    <span>View</span>
                                </a>
                                <form action="" method="POST" onsubmit="return confirm('Are you sure you want to delete this message?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-700 flex items-center space-x-1">
                                        <i class="fas fa-trash-alt"></i>
                                        <span>Delete</span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="px-6 py-8 text-center text-gray-500">
                                <i class="fas fa-inbox text-3xl mb-2 block text-gray-400"></i>
                                <span>No messages found.</span>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>


    {{-- Pagination (Optional) --}}
    {{-- <div class="mt-6">
        {{ $messages->links() }}
    </div>  --}}
</div>
@endsection
