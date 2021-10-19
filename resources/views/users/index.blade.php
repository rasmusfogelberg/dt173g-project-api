<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Users') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <x-validation-errors />
          <x-success-message />  
          <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
              <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                  <table class="min-w-full text-left">
                    <thead class="bg-gray-50">
                      <tr>
                        <th scope="col" class="px-6 py-3">
                          First name
                        </th>
                        <th class="px-6 py-3">surname</th>
                        <th class="px-6 py-3">email</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                      </tr>
                    </thead>
                    <tbody class="bg-white text-left">
                      @foreach($users as $user)
                        <tr>
                          <td class="px-6 py-4 break-words">
                            {{$user->firstname}}
                          </td>
                          <td class="px-6 py-4 break-words">
                            {{$user->surname}}
                          </td>
                          <td class="px-6 py-4 break-words">
                            {{$user->email}}
                          </td>
                          <td colspan="2" class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <div class="flex flex-row">
                              <a href="{{ route('users.edit', $user) }}" class="text-indigo-600 hover:text-indigo-900">
                                Edit
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-400"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                </svg>
                              </a>
                              <form action="{{ route('users.destroy', $user) }}" method="POST" class="ml-2">
                                @method('DELETE')
                                @csrf

                                <button type="submit" class="text-red-600">
                                  Delete
                                  <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-400"
                                      fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round"
                                          stroke-width="2"
                                          d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                  </svg>
                                </button>
                              </form>
                            </div>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <div class="mt-4">
                  {{ $users->links() }}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>