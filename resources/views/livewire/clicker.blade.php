
<div class="text-white">
    <form action="">
        <input wire:model="name" class="border-2 border-solid border-indigo-500 p-2 rounded-sm" type="text" placeholder="name">
        <input wire:model="email" class="border-2 border-solid border-indigo-500 p-2 rounded-sm" type="email" placeholder="Email">
        <input wire:model="password" class="border-2 border-solid border-indigo-500 p-2 rounded-sm" type="password" placeholder="********">
        <button wire:click.prevent="createNewUser">Create New User</button>
    </form>

    <table class="w-full text-left table-auto min-w-max mt-2">
        <thead>
          <tr class="bg-red-500 text-black">
            <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
              <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                Name
              </p>
            </th>
            <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
              <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                Email
              </p>
            </th>
          </tr>
        </thead>
        <tbody class="bg-indigo-500 text-black">
            @foreach ($users as $user)
            <tr>
            <td class="p-4 border-b border-blue-gray-50">{{$user->name}}</td>
            <td class="p-4 border-b border-blue-gray-50">{{$user->email}}</td>
            </tr>
            @endforeach
        </tbody>
      </table>

</div>
