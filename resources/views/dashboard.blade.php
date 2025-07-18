<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <!-- Total Users Card -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h3 class="text-lg font-bold text-gray-700 mb-2">Total Users</h3>
                    <p class="text-3xl text-blue-600 font-bold">{{ $totalUsers }}</p>
                </div>

                <!-- Total Bookings Card -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h3 class="text-lg font-bold text-gray-700 mb-2">Total Bookings</h3>
                    <p class="text-3xl text-green-600 font-bold">{{ $totalBookings }}</p>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>