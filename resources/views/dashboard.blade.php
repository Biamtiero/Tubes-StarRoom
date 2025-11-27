<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-semibold mb-4">Welcome back, {{ Auth::user()->name }}! 👋</h3>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
                        <div class="bg-indigo-50 p-6 rounded-lg">
                            <h4 class="font-semibold text-indigo-700">Your Profile</h4>
                            <p class="mt-2 text-gray-600">Manage your account settings</p>
                            <a href="{{ route('profile.edit') }}"
                                class="inline-block mt-4 text-indigo-600 hover:text-indigo-800">
                                Edit Profile →
                            </a>
                        </div>

                        <div class="bg-green-50 p-6 rounded-lg">
                            <h4 class="font-semibold text-green-700">Account Status</h4>
                            <p class="mt-2 text-gray-600">Your account is active</p>
                            <p class="mt-1 text-sm text-gray-500">Member since:
                                {{ Auth::user()->created_at->format('M Y') }}</p>
                        </div>

                        <div class="bg-blue-50 p-6 rounded-lg">
                            <h4 class="font-semibold text-blue-700">Quick Actions</h4>
                            <div class="mt-2 space-y-2">
                                <a href="#" class="block text-blue-600 hover:text-blue-800">Browse Rooms</a>
                                <a href="#" class="block text-blue-600 hover:text-blue-800">Your Bookings</a>
                                <a href="#" class="block text-blue-600 hover:text-blue-800">Settings</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
