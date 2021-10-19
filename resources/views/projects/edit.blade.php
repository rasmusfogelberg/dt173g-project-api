<x-app-layout>
  <x-slot name="header">
  <h2 class="font-semibold text-xl text-gray-800 leading-tight">
    {{ __('Edit project') }}
  </h2>
</x-slot>

<div class="py-12">
  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
      <div class="p-6 bg-white border-b border-gray-200">

        <x-validation-errors />

        <form method="POST" action="{{ route('projects.update', $project) }}">
          @method('PUT')
          @csrf

          <div class="grid grid-cols-2 gap-6 mb-6">
            
            <div>
                <x-label for="title" :value="__('Title')" />
                <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title', $project->title)" />
            </div>

            <div>
                <x-label for="url" :value="__('URL')" />
                <x-input id="url" class="block mt-1 w-full" type="text" name="url" :value="old('url', $project->url)" />
            </div>

          </div>
          
          <div>
            <x-label for="description" :value="__('Description')" />
            <textarea id="description" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" rows="10" name="description">{{ old('description', $project->description) }}</textarea>
          </div>


          <div class="flex items-center justify-end mt-4">
              <x-button class="ml-3">
                  {{ __('Update') }}
              </x-button>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>

</x-app-layout>