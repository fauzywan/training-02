
<div class="text-white">

    <h1>{{$title}}</h1>
    <h1>{{$username}}</h1>
    {{ count($users) }}
    <button wire:click="createNewUser" class="bg-red-500 px-3 py-2 rounded-sm font-bold cursor-pointer active:text-white active:scale-[0.9] transition-all duration-300 delay-150" type="button">Create New User</button>
</div>
