<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-lg text-gray-900 leading-tight">
            <span class="block text-gray-700">
                Utilize our comprehensive tools to effectively monitor bandwidth, analyze memory usage, track visitor statistics, and optimize resource management.
            </span>
            <a href="{{ route('dashboard') }}" class="text-indigo-600 hover:text-indigo-800 underline">
                {{ __('Return to Dashboard') }}
            </a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Learning Panel -->
            <div class="bg-gradient-to-r from-green-400 to-blue-500 overflow-hidden shadow-xl sm:rounded-lg p-6 mb-8">
                <h3 class="text-xl font-bold text-white mb-4">Explore the Learning Panel</h3>
                <p class="mb-6 text-white">
                    Dive into resources to enhance your skills in Blog Posting, Home Page, and About Page creation.
                </p>

                <div class="flex justify-center">
                    <a href="{{ route('admin.learning-panel') }}" 
                       class="inline-block bg-white text-blue-600 font-bold py-3 px-6 rounded-full shadow-md hover:bg-blue-100 transition duration-300 transform hover:scale-105">
                        Go to Learning Panel
                    </a>
                </div>
            </div>

            <!-- Admin Editing Dashboard -->
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h3 class="text-lg font-bold mb-4">Welcome to the Admin Dashboard</h3>
                <p class="mb-6 text-gray-600">
                    Use the options below to manage various sections of your website. Click on a card to perform actions like Create, Edit, Update, or Delete content.
                </p>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Card 1: Blog Management -->
                    <div class="p-6 bg-blue-100 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                        <h4 class="font-bold text-lg text-blue-800">## Manage Blog Posts</h4>
                        <p class="text-sm text-gray-600 mt-2">
                            Create, update, or delete blog posts. Use this section to keep your blog content fresh and relevant.
                        </p>
                        <a href="{{ route('admin.blog') }}" 
                           class="inline-block mt-4 bg-blue-600 text-white rounded-full px-4 py-2 text-sm font-bold hover:bg-blue-700 hover:scale-105 transition-transform duration-300">
                            Create Now =>
                        </a>
                    </div>

                    <!-- Card 2: Home Page -->
                    <div class="p-6 bg-green-100 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                        <h4 class="font-bold text-lg text-green-800">## Edit Home Page</h4>
                        <p class="text-sm text-gray-600 mt-2">
                            Update the content of your website's home page to ensure visitors get the latest information.
                        </p>
                        <a href="{{ route('admin.home') }}" 
                           class="inline-block mt-4 bg-green-600 text-white rounded-full px-4 py-2 text-sm font-bold hover:bg-green-700 hover:scale-105 transition-transform duration-300">
                            Update Now =>
                        </a>
                    </div>

                    <!-- Card 3: About Page -->
                    <div class="p-6 bg-yellow-100 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                        <h4 class="font-bold text-lg text-yellow-800">## Edit About Page</h4>
                        <p class="text-sm text-gray-600 mt-2">
                            Keep your "About" section updated with your latest story or business details.
                        </p>
                        <a href="{{ route('admin.about') }}" 
                           class="inline-block mt-4 bg-yellow-600 text-white rounded-full px-4 py-2 text-sm font-bold hover:bg-yellow-700 hover:scale-105 transition-transform duration-300">
                            Add Now =>
                        </a>
                    </div>

                    <!-- Card 4: Contact Messages -->
                    <div class="p-6 bg-red-100 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                        <h4 class="font-bold text-lg text-red-800">## View Contact Messages</h4>
                        <p class="text-sm text-gray-600 mt-2">
                            Check and respond to messages sent via the contact form to stay connected with your audience.
                        </p>
                        <a href="{{ route('admin.messages') }}" 
                           class="inline-block mt-4 bg-red-600 text-white rounded-full px-4 py-2 text-sm font-bold hover:bg-red-700 hover:scale-105 transition-transform duration-300">
                            View Now =>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>