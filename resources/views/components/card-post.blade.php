@props([
    'title' => 'teste',
    'description' => 'error',
    'card_height' => "h-[300px]",
    'card_width' => "w-[800px]"
])

<div class="mb-4 mt-4 {{$card_width}}">
    <a href="#"
        class="block p-6 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 {{$card_height}}">

        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $title }}</h5>
        <p class="font-normal text-gray-700 dark:text-gray-400 break-words">{{ $description }}
        </p>
    </a>
</div>
