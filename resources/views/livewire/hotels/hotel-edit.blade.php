<div>
    <div>
        <div class="flex  mt-5">
            <a wire:navigate href="/hotels" class="bg-red-500 bg-blue-500 flex items-center gap-1 font-bold text-white rounded-sm px-2 py-1 text-[.9em]"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
              </svg>

               Back</a>
        </div>
        <h2
        class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
        >
        Edit Hotel
        </h2>
        <div class=" rounded overflow-hidden shadow-lg w-full bg-white py-3 px-4 ">
            <h4 class="my-2">Edit Hotel</h4>

            <form class=" flex flex-col gap-4 mt-2" wire:submit="update">
                <div class="form-section">
                      <label class="block text-sm grid grid-cols-3">
                        <span class="text-gray-700 dark:text-gray-400 text-bold">Name</span>
                        <div class="flex flex-col col-span-2">

                            <input
                            class="w-full pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
                            type="text"
                            wire:model="name"
                            placeholder="Type Here"
                            />
                            @error('name')
                            <span class="text-xs text-red-600 dark:text-red-400">
                             {{ $message }}
                            </span>
                            @enderror
                        </div>
                      {{-- focus:border-red-400 focus:outline-none focus:shadow-outline-red  --}}

                      </label>
                </div>
                <div class="form-section">
                    <label class="block text-sm grid grid-cols-3">
                        <span class="text-gray-700 dark:text-gray-400 text-bold">Email</span>
                        <div class="flex flex-col w-full col-span-2">

                            <input
                            class="w-full col-span-2 pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
                            type="text"
                            wire:model="email"
                            placeholder="example@gmail.com"
                            />
                        </div>
                      </label>
                </div>

                <div class="form-section">
                      <label class="block text-sm grid grid-cols-3">
                        <span class="text-gray-700 dark:text-gray-400 text-bold">phone</span>
                        <div class="flex flex-col w-full col-span-2">

                            <input
                            class="w-full col-span-2 pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
                            type="text"
                            wire:model="phone"
                            placeholder="Type Here"
                            />
                        </div>
                      </label>
                </div>
                <div class="form-section">
                      <label class="block text-sm grid grid-cols-3">
                        <span class="text-gray-700 dark:text-gray-400 text-bold">Address</span>
                        <textarea
                        wire:model="address"
                        class="block col-span-2 w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                        rows="3"
                        placeholder="Enter some long form content."
                      ></textarea>
                      </label>
                </div>
                <div class="form-section">
                      <label class="block text-sm grid grid-cols-3">
                        <span class="text-gray-700 dark:text-gray-400 text-bold">stars</span>
                        <div class="flex flex-col w-full col-span-2">

                            <input
                            class="w-full col-span-2 pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
                            type="number"
                            wire:model="stars"
                            placeholder="Type Here"
                            />
                        </div>
                      </label>
                </div>
                <div class="form-section">
                      <label class="block text-sm grid grid-cols-3">
                        <span class="text-gray-700 dark:text-gray-400 text-bold">Check In Time</span>
                        <div class="flex flex-col w-full col-span-2">

                            <input
                            class="w-full col-span-2 pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
                            type="datetime-local"
                            wire:model="check_in_time"
                            placeholder="Type Here"
                            />
                        </div>
                      </label>
                </div>
                <div class="form-section">
                      <label class="block text-sm grid grid-cols-3">
                        <span class="text-gray-700 dark:text-gray-400 text-bold">Check Out Time</span>
                        <div class="flex flex-col w-full col-span-2">

                            <input
                            class="w-full col-span-2 pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
                            type="datetime-local"
                            wire:model="check_out_time"
                            placeholder="Type Here"
                            />
                        </div>
                      </label>
                </div>
                <div class="flex justify-end">

                    <button class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                          </svg>

                        <span>Submit</span>
                    </button>
                </div>
            </form>
          </div>

    </div>

</div>
