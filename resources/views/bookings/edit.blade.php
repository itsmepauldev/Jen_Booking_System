<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-white leading-tight">
            {{ __('Edit Booking') }}
        </h2>
    </x-slot>



    {{-- Main Content --}}
    <div class="flex-1">
        @if ($errors->any())
            <div class="bg-red-600 p-4 rounded mb-4">
                <ul class="list-disc pl-5 space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="bg-gray-800 p-6 rounded shadow">
            <form action="{{ route('bookings.update', $booking->id) }}" method="POST" class="space-y-4">
                @csrf
                @method('PUT')

                <div>
                    <label for="title" class="block text-sm font-medium">Title</label>
                    <input type="text" name="title" id="title"
                        class="mt-1 w-full bg-gray-700 text-white rounded px-4 py-2"
                        value="{{ old('title', $booking->title) }}" required>
                </div>

                <div>
                    <label for="description" class="block text-sm font-medium">Description</label>
                    <textarea name="description" id="description" rows="4"
                        class="mt-1 w-full bg-gray-700 text-white rounded px-4 py-2"
                        required>{{ old('description', $booking->description) }}</textarea>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="date" class="block text-sm font-medium">Date</label>
                        <input type="date" name="date" id="date"
                            class="mt-1 w-full bg-gray-700 text-white rounded px-4 py-2"
                            value="{{ old('date', $booking->date) }}" required>
                    </div>

                    <div>
                        <label for="time" class="block text-sm font-medium">Time</label>
                        <input type="time" name="time" id="time"
                            class="mt-1 w-full bg-gray-700 text-white rounded px-4 py-2"
                            value="{{ old('time', $booking->time) }}" required>
                    </div>
                </div>

                <div class="mt-6 flex gap-3">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded text-white">Update
                        Booking</button>
                    <a href="{{ route('bookings.index') }}"
                        class="bg-gray-600 hover:bg-gray-700 px-4 py-2 rounded text-white">Cancel</a>
                </div>
            </form>
        </div>
    </div>

    </div>
    </div>
</x-app-layout>