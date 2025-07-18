<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-white leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-10 bg-gray-900 min-h-screen text-white">
        {{-- Match Bookings page: remove max-w-7xl --}}
        <div class="px-4 sm:px-6 lg:px-8 space-y-6">

            @if(session('success'))
                <div class="bg-green-600 p-4 rounded shadow">
                    {{ session('success') }}
                </div>
            @endif

            {{-- Full width table --}}
            <div class="overflow-x-auto bg-gray-800 p-4 rounded shadow w-full">
                <table class="w-full text-left text-sm table-auto">
                    <thead>
                        <tr class="text-gray-300 border-b border-gray-700">
                            <th class="px-4 py-2">Name</th>
                            <th class="px-4 py-2">Email</th>
                            <th class="px-4 py-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($users as $user)
                            <tr class="border-b border-gray-700 hover:bg-gray-700">
                                <td class="px-4 py-2">{{ $user->name }}</td>
                                <td class="px-4 py-2">{{ $user->email }}</td>
                                <td class="px-4 py-2 flex flex-wrap gap-2">
                                    <a href="{{ route('users.edit', $user->id) }}"
                                        class="bg-yellow-500 text-black px-2 py-1 rounded hover:bg-yellow-600">Edit</a>
                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST"
                                        onsubmit="return confirm('Delete this user?');">
                                        @csrf
                                        @method('DELETE')
                                        <button class="bg-red-600 px-2 py-1 rounded hover:bg-red-700">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="px-4 py-4 text-center text-gray-400">No users found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>