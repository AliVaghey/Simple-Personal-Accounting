<div>
    <div class="flex flex-col gap-4 mb-32">
        @foreach($this->tags as $tag)
            <livewire:tag-card :$tag wire:key="tag-{{ $tag->id }}" />
        @endforeach
    </div>
</div>
