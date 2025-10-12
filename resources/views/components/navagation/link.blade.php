@props(['name'])

<a
    class="flex flex-col justify-center items-center"
    wire:navigate
    {{ $attributes }}
>
    <div>{{ $slot }}</div>
    <div class="text-white">{{ $name }}</div>
</a>
