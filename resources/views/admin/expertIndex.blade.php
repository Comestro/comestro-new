@extends('admin.layouts.app')

@section('title', 'All Experts')

@section('content')
    <div x-data="{ open: false, editData: {} }" class="max-w-6xl mx-auto bg-white shadow-lg rounded-xl p-8 mt-8">

        {{-- Header Section --}}
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-3xl font-bold text-[#0079C1]">
                All Expert Developers
            </h1>

            <a href="{{ route('admin.expertDev.store') }}"
                class="inline-flex items-center bg-[#0079C1] text-white px-5 py-2.5 rounded-lg shadow hover:bg-[#005f99] transition duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                </svg>
                Add Expert
            </a>
        </div>

        {{-- Success Message --}}
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-5">
                {{ session('success') }}
            </div>
        @endif

        {{-- Table Section --}}
        <div class="overflow-x-auto">
            <table class="min-w-full border border-gray-200 rounded-lg overflow-hidden">
                <thead class="bg-[#0079C1] text-white">
                    <tr>
                        <th class="py-3 px-4 text-left">#</th>
                        <th class="py-3 px-4 text-left">Profile</th>
                        <th class="py-3 px-4 text-left">Name</th>
                        <th class="py-3 px-4 text-left">Email</th>
                        <th class="py-3 px-4 text-left">Skills</th>
                        <th class="py-3 px-4 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @forelse ($experts as $index => $expert)
                        <tr class="hover:bg-gray-50 transition">
                            <td class="py-3 px-4">{{ $index + 1 }}</td>

                            <td class="py-3 px-4">
                                <img src="{{ asset('storage/' . $expert->image) }}" alt="Profile"
                                    class="w-12 h-12 rounded-full object-cover border border-gray-300">
                            </td>

                            <td class="py-3 px-4 font-semibold text-gray-800">{{ $expert->name }}</td>
                            <td class="py-3 px-4 text-gray-600">{{ $expert->email }}</td>
                            <td class="py-3 px-4 text-gray-600">{{ $expert->skill }}</td>

                            <td class="py-3 px-4">
                                <div class="flex items-center gap-3">
                                    {{-- EDIT BUTTON --}}
                                    <button onclick="openEditExpertModal(
                                                               '{{ $expert->id }}',
                                                                '{{ $expert->name }}',      
                                                                '{{ $expert->email }}',
                                                                '{{ $expert->skill }}',
                                                        '{{ route('admin.updateexpert', $expert->id) }}'
                                                    )" class="text-blue-600 hover:text-blue-800 font-medium">
                                        Edit
                                    </button>
                                    <a href="{{ route('admin.viewexpert', $expert->id) }}"
                                        class="text-red-600 hover:text-red-800 font-medium">
                                        View
                                    </a>
                                    {{-- DELETE FORM --}}
                                    <form action="{{ route('admin.deleteexpert', $expert->id) }}" method="POST"
                                        onsubmit="return confirm('Are you sure you want to delete this expert?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-800 font-medium">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="py-6 text-center text-gray-500">
                                No expert developers found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{-- EDIT EXPERT MODAL --}}
        <div id="editExpertModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
            <div class="bg-white rounded-lg shadow-lg w-full max-w-lg p-6 relative">
                {{-- Close Button --}}
                <button onclick="toggleModal('editExpertModal')"
                    class="absolute top-3 right-3 text-gray-500 hover:text-gray-800 text-xl font-bold">&times;</button>

                <h2 class="text-2xl font-bold text-[#0079C1] mb-4">Edit Expert</h2>

                <form id="editExpertForm" action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label class="block text-gray-700 font-semibold mb-2">Name</label>
                        <input type="text" name="name" id="editName"
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-[#0079C1] focus:outline-none"
                            required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 font-semibold mb-2">Email</label>
                        <input type="email" name="email" id="editEmail"
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-[#0079C1] focus:outline-none"
                            required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 font-semibold mb-2">Skill</label>
                        <input type="text" name="skill" id="editSkill"
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-[#0079C1] focus:outline-none"
                            required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 font-semibold mb-2">Profile Image (optional)</label>
                        <input type="file" name="image" class="w-full border border-gray-300 rounded-lg px-3 py-2">
                    </div>

                    <div class="flex justify-end">
                        <button type="button" onclick="toggleModal('editExpertModal')"
                            class="bg-gray-300 text-gray-800 px-4 py-2 rounded-lg mr-3 hover:bg-gray-400">
                            Cancel
                        </button>
                        <button type="submit" class="bg-[#0079C1] text-white px-5 py-2 rounded-lg hover:bg-[#005f99]">
                            Update Expert
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <script>
            function toggleModal(modalID) {
                const modal = document.getElementById(modalID);
                modal.classList.toggle('hidden');
                modal.classList.toggle('flex');
            }

            // Function to populate the edit modal
            function openEditExpertModal(id, name, email, skill, formAction) {
                document.getElementById('editName').value = name;
                document.getElementById('editEmail').value = email;
                document.getElementById('editSkill').value = skill;
                document.getElementById('editExpertForm').action = formAction;
                toggleModal('editExpertModal');
            }
        </script>


    </div>
@endsection