<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-white leading-tight">
            {{ __('Edit User') }}
        </h2>
    </x-slot>

    <div class="py-10 bg-gray-900 min-h-screen text-white">
        <div class="px-4 sm:px-6 lg:px-8 space-y-6 max-w-xl mx-auto">

            @if ($errors->any())
                <div class="bg-red-600 p-4 rounded shadow">
                    <ul class="list-disc list-inside text-sm text-white">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="bg-gray-800 p-6 rounded shadow">
                <form action="{{ route('users.update', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium mb-1">Full Name</label>
                        <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}"
                            class="w-full px-4 py-2 rounded bg-gray-900 border border-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 text-white">
                    </div>

                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium mb-1">Email</label>
                        <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}"
                            class="w-full px-4 py-2 rounded bg-gray-900 border border-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 text-white">
                    </div>

                    <div class="flex justify-end gap-4">
                        <a href="{{ route('users.index') }}"
                            class="bg-gray-600 hover:bg-gray-700 px-4 py-2 rounded text-white">Cancel</a>
                        <button type="submit"
                            class="bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded text-white">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>