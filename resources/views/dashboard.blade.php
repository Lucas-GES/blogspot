<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Manage Posts') }}
        </h2>
    </x-slot>

    <div class="min-h-screen bg-white dark:bg-gray-800 dark:text-gray-200 overflow-hidden shadow-xl sm:rounded-lg">
        <x-my-posts />
    </div>
</x-app-layout>
