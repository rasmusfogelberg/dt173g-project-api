<x-app-layout>
  <x-slot name="header">
  <h2 class="font-semibold text-xl text-gray-800 leading-tight">
    {{ __('Edit user') }}
  </h2>
</x-slot>

<div class="py-12">
  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
      <div class="p-6 bg-white border-b border-gray-200">

        <x-validation-errors />

        <form method="POST" action="{{ route('users.update', $user) }}">
          @method('PUT')
          @csrf

          <div class="grid grid-cols-2 gap-6">
            <div>
                <x-label for="firstname" :value="__('Firstname')" />
                <x-input id="firstname" class="block mt-1 w-full bg-opacity-80 bg-gray-300" type="text" name="firstname" :value="old('firstname', $user->firstname)" disabled />
            </div>

            <div>
                <x-label for="surname" :value="__('Surname')" />
                <x-input id="surname" class="block mt-1 w-full bg-opacity-80 bg-gray-300" type="text" name="surname" :value="old('surname', $user->surname)" disabled />
            </div>

          </div>
          
          <div>
            <x-label for="email" :value="__('Email')" />
            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $user->email)" />
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