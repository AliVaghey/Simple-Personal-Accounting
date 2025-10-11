@props(['name'])

<a
    class=""
    wire:navigate
    {{ $attributes }}
>
    <div>{{ $slot }}</div>
    <div>{{ $name }}</div>
</a>
