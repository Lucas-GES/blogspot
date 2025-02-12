@props([
    'posts' => null,
])

<div>
    @if ($posts !== null)
        <div class="ms-4 grid grid-cols-3">
            @for ($i = 0; $i < count($posts); $i++)
                <x-card-post title="Post {{ $i + 1 }}" description="Some description" card_width="w-[400px]" />
            @endfor
        </div>
    @else
        <div class="ml-16">
            <h1>You haven't post anything yet...</h1>
        </div>
    @endif
</div>
