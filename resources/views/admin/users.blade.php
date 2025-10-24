@extends('admin.layouts.app')
@section('title', 'Users')

@section('content')
<div class="min-h-screen bg-gray-50 py-8 px-6" x-data="{ openModal: false, user: {} }">

    <div class="max-w-7xl mx-auto bg-white shadow-lg rounded-2xl overflow-hidden">
        <!-- Header -->
        <div class="flex flex-col md:flex-row items-center justify-between bg-gradient-to-r from-[#0079C1] to-blue-700 px-8 py-6 text-white">
            <div>
                <h1 class="text-3xl font-bold flex items-center gap-2">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 20h5v-2a4 4 0 00-3-3.87M9 20H4v-2a4 4 0 013-3.87M16 3.13a4 4 0 010 7.75M8 3.13a4 4 0 000 7.75M12 22v-6M12 16v6" />
                    </svg>
                    User Management
                </h1>
                <p class="text-sm text-blue-100">Manage registered users and their roles</p>
            </div>
        </div>

        <!-- Alert -->
        @if (session('success'))
        <div
            class="m-6 p-4 rounded-lg bg-green-100 border border-green-300 text-green-700 flex justify-between items-center">
            <span>{{ session('success') }}</span>
            <button onclick="this.parentElement.remove()" class="text-green-700 hover:text-green-900">&times;</button>
        </div>
        @endif

        <!-- Table -->
        <div class="p-8 overflow-x-auto">
            <table id="userTable" class="min-w-full border border-gray-200 rounded-lg overflow-hidden">
                <thead class="bg-gray-100 text-gray-700 uppercase text-sm">
                    <tr>
                        <th class="py-3 px-4 text-left">ID</th>
                        <th class="py-3 px-4 text-left">Name</th>
                        <th class="py-3 px-4 text-left">Email</th>
                        <th class="py-3 px-4 text-left">Role</th>
                        <th class="py-3 px-4 text-left">Created At</th>
                        <th class="py-3 px-4 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @forelse ($users as $user)
                    <tr class="hover:bg-gray-50 transition">
                        <td class="py-3 px-4 text-gray-700">{{ $user->id }}</td>
                        <td class="py-3 px-4 font-semibold text-gray-800">{{ $user->name }}</td>
                        <td class="py-3 px-4 text-gray-600">{{ $user->email }}</td>
                        <td class="py-3 px-4">
                            <span
                                class="px-3 py-1 text-xs font-medium rounded-full {{ $user->role == 'Admin' ? 'bg-blue-100 text-blue-700' : 'bg-green-100 text-green-700' }}">
                                {{ $user->role ?? 'User' }}
                            </span>
                        </td>
                        <td class="py-3 px-4 text-gray-500">{{ $user->created_at->format('d M, Y') }}</td>
                        <td class="py-3 px-4 text-center">
                            <div class="flex justify-center gap-2">
                                <!-- Edit Button -->
                                <button
                                    @click="openModal = true; user = { id: '{{ $user->id }}', name: '{{ $user->name }}', email: '{{ $user->email }}', role: '{{ $user->role }}' }"
                                    class="inline-flex items-center justify-center w-9 h-9 bg-blue-100 text-blue-700 rounded-lg hover:bg-blue-200 transition">
                                    <i class="fas fa-edit"></i>
                                </button>

                                <!-- Delete -->
                                <form action="{{ route('admin.deleteUser', $user->id) }}" method="POST"
                                    onsubmit="return confirm('Are you sure you want to delete this user?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="inline-flex items-center justify-center w-9 h-9 bg-red-100 text-red-600 rounded-lg hover:bg-red-200 transition">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center py-6 text-gray-500">No users found.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="px-8 pb-8">
            {{ $users->links('pagination::tailwind') }}
        </div>
    </div>

    <!-- 🔹 Edit Modal -->
    <div x-show="openModal" x-transition class="fixed inset-0 bg-black/50 flex items-center justify-center z-50">
        <div @click.away="openModal = false"
            class="bg-white w-full max-w-lg mx-4 rounded-2xl shadow-xl p-6 relative">
            <h2 class="text-2xl font-bold text-[#0079C1] mb-4">Edit User</h2>

            <form method="POST" :action="`/admin/updateUser/${user.id}`">
                @csrf
                @method('PUT')
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                        <input type="text" name="name" x-model="user.name"
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-[#0079C1]"
                            required>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                        <input type="email" name="email" x-model="user.email"
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-[#0079C1]"
                            required>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Role</label>
                        <select name="role" x-model="user.role"
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-[#0079C1]">
                            <option value="Admin">Admin</option>
                            <option value="editor">Editor</option>
                        </select>
                    </div>
                </div>

                <div class="flex justify-end gap-3 mt-6">
                    <button type="button" @click="openModal = false"
                        class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300">Cancel</button>
                    <button type="submit"
                        class="px-4 py-2 bg-[#0079C1] text-white rounded-lg hover:bg-blue-700">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const searchInput = document.createElement('input');
        searchInput.placeholder = 'Search users...';
        searchInput.className =
            'border border-gray-300 rounded-lg px-3 py-2 mb-4 w-1/3 focus:ring-2 focus:ring-[#0079C1]';
        const table = document.querySelector('#userTable');
        table.parentNode.insertBefore(searchInput, table);

        searchInput.addEventListener('keyup', function() {
            const search = this.value.toLowerCase();
            document.querySelectorAll('#userTable tbody tr').forEach(row => {
                const match = Array.from(row.children).some(td => td.textContent.toLowerCase().includes(search));
                row.style.display = match ? '' : 'none';
            });
        });
    });
</script>
@endsection
