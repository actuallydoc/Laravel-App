<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-2">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>
            <form action="/checkout" method="POST">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <button class="bg-white p-2 rounded-lg mt-3" type="submit">Checkout</button>
            </form>
        </div>

    </div>
</x-app-layout>
