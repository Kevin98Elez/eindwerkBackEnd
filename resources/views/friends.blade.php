<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('friends') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("here is a list of all your friends") }}
                </div>
                {{-- <form action="/friend" method="POST">
                    <label for="friend_id">Friend ID:</label>
                    <input type="text" id="friend_id" name="friend_id" required>
                    <br><br>
                    <button type="submit">Add Friend</button>
                </form> --}}

                @foreach($users->friend as $key => $value)
                    <div>{{$key}} : {{$value->name}} 
                    <a class="form-control" type="number" name="users[{{$value->id}}]" value="users[{{$value->name}}]">
                    </div>
                @endforeach
            

            </div>

           
            <br>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <input type="text" name="friendSearch" id="friendSearch" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="">
                <br>
                <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-grey-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                    {{__("Search friend")}}
                </button>

                
            </div>
        </div>
    </div>
</x-app-layout>