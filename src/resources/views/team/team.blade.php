<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

{{--    <div class="">--}}
{{--        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
{{--            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">--}}
{{--                <div class="p-6 text-gray-900 dark:text-gray-100">--}}
{{--                    {{ __("You're logged in!") }}--}}
{{--                    <strong>{{$user}}</strong>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-12">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <h1>Участники команды {{$team->name}}</h1>
            </div>
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <ul class="list-group list-group-flush">
                    @foreach($team->users as $user)
                        <li class="list-group-item border-bottom">{{$user->name}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

</x-app-layout>
