<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!

                    <div class="flex items-center mt-4">
                        <a class="text-blue-600 visited:text-purple-600" href="{{ route('experiences.create') }}">
                            {{ __('Create new experience') }}
                        </a>
                    </div>

                    <div class="flex items-center mt-4">
                        <a class="text-blue-600 visited:text-purple-600" href="{{ route('educations.create') }}">
                            {{ __('Create new education') }}
                        </a>
                    </div>

                    <div class="flex items-center mt-4">
                        <a class="text-blue-600 visited:text-purple-600" href="{{ route('projects.create') }}">
                            {{ __('Create new project') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
    