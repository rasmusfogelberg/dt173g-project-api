<x-app-layout>
    <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Edit experience') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">

          <x-validation-errors />

          <form method="POST" action="{{ route('experiences.update', $experience) }}">
            @method('PUT')
            @csrf

            <div class="grid grid-cols-2 gap-6">
              
              <div>
                  <x-label for="title" :value="__('Title')" />
                  <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title', $experience->title)" />
              </div>

              <div>
                  <x-label for="company" :value="__('Company')" />
                  <x-input id="company" class="block mt-1 w-full" type="text" name="company" :value="old('company', $experience->company)" />
              </div>

              <div>
                  <x-label for="started_at" :value="__('Started At')" />
                  <x-input id="started_at" class="block mt-1 w-full" type="date" name="started_at" :value="old('started_at', $experience->started_at)" />
              </div>

              <!-- TODO: fix so that unchecking the ongoing checkbox, shows end-date field and vice versa -->

              <div>
                  <x-label for="ended_at" :value="__('Ended At')" />
                  <x-input id="ended_at" class="block mt-1 mb-1 w-full" type="date" name="ended_at" :value="old('ended_at', $experience->ended_at)" :disabled="old('ended_at') === '' ? true : false" />

                  <div class="flex items-center">
                    <x-label for="ongoing" :value="__('Ongoing')" />
                    <input 
                      id="ongoing" 
                      class="ml-2 form-tick appearance-none h-6 w-6 border border-gray-300 rounded-md checked:bg-blue-600 checked:border-transparent focus:outline-none" 
                      type="checkbox" 
                      name="ongoing" 
                      value="{{ $experience->ongoing == 1 ? '1' : '0' }}"
                      {{ $experience->ongoing == 1 ? 'checked' : '' }} 
                    />
                  </div>
              </div>

            </div>
            
            <div>
              <x-label for="description" :value="__('Description')" />
              <textarea id="description" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" rows="10" name="description">{{ old('description', $experience->description) }}</textarea>
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