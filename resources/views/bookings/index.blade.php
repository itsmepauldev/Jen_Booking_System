<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-white leading-tight">
            {{ __('Bookings') }}
        </h2>
    </x-slot>

    <div class="py-10 bg-gray-900 min-h-screen text-white">
        {{-- Remove max-w-7xl --}}
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
                            <th class="px-4 py-2">Title</th>
                            <th class="px-4 py-2">Description</th>
                            <th class="px-4 py-2">Date</th>
                            <th class="px-4 py-2">Time</th>
                            <th class="px-4 py-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($bookings as $booking)
                            <tr class="border-b border-gray-700 hover:bg-gray-700">
                                <td class="px-4 py-2">{{ $booking->title }}</td>
                                <td class="px-4 py-2">{{ $booking->description }}</td>
                                <td class="px-4 py-2">{{ $booking->date }}</td>
                                <td class="px-4 py-2">{{ $booking->time }}</td>
                                <td class="px-4 py-2 flex flex-wrap gap-2">
                                    <a href="{{ route('bookings.edit', $booking->id) }}"
                                        class="bg-yellow-500 text-black px-2 py-1 rounded hover:bg-yellow-600">Edit</a>
                                    <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST"
                                        onsubmit="return confirm('Delete this booking?');">
                                        @csrf
                                        @method('DELETE')
                                        <button class="bg-red-600 px-2 py-1 rounded hover:bg-red-700">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="px-4 py-4 text-center text-gray-400">No bookings found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>