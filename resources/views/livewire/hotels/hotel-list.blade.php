<div>
    <div class="flex flex-end justify-end mt-5">
        <a wire:navigate href="hotels/create" class="bg-red-500 bg-blue-500 flex items-center gap-1 font-bold text-white rounded-sm px-2 py-1 text-[.9em]"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
          </svg>
           Create Hotel</a>
    </div>
    <h2
    class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
    >
    Hotels
    </h2>
    <div class=" rounded overflow-hidden shadow-lg w-full bg-white p-2 ">
        <h4 class="my-2">Hotel List</h4>
        <div class="relative text-gray-500 focus-within:text-purple-600 mx-2 my-5">
            <input wire:model.live.debounce.1000ms="keyword" class="block w-full pr-20 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" placeholder="Search...">

          </div>
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full ">
                    <thead>
                      <tr
                        class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                      >
                        <th class="px-4 py-3">#</th>
                        <th class="px-4 py-3">Name</th>
                        <th class="px-4 py-3">Address</th>
                        <th class="px-4 py-3">Phone</th>
                        <th class="px-4 py-3">Email</th>
                        <th class="px-4 py-3">Stars</th>
                        <th class="px-4 py-3">Check In Time</th>
                        <th class="px-4 py-3">Check Out Time</th>
                        <th class="px-4 py-3">Actions</th>
                      </tr>
                    </thead>
                    <tbody
                      class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                    >
                    @foreach ( $hotels as $hotel )

                    <tr class="text-gray-700 dark:text-gray-400">
                        <td class="px-4 py-2">{{$loop->iteration}}</td>
                        <td class="px-4 py-2">{{$hotel->name}}</td>
                        <td class="px-4 py-2">{{$hotel->address}}</td>
                        <td class="px-4 py-2">{{$hotel->phone}}</td>
                        <td class="px-4 py-2">{{$hotel->email}}</td>
                        <td class="px-4 py-2">{{$hotel->stars}}</td>
                        <td class="px-4 py-2">{{$hotel->check_in_time}} </td>
                        <td class="px-4 py-2">{{$hotel->check_out_time}} </td>
                        <td class="px-4 py-2 flex flex-wrap gap-2">
                        <a wire:navigate href="/hotels/{{$hotel->id}}/edit" class="px-2 py-1 font-semibold leading-tight text-blue-700 bg-blue-100 rounded-full dark:text-white dark:bg-blue-600">Edit</a>
                        <button wire:confirm="Are you sure want to delete this hotel?" wire:click="delete({{ $hotel->id }})" class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-full dark:text-white dark:bg-orange-600">Delete</button>
                        </td>
                    </tr>

                    @endforeach

                    </tbody>
                  </table>
            </div>
            <div
              class="flex px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
            >
            {{ $hotels->links() }}
            </div>
          </div>
      </div>

</div>
