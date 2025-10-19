<div class="h-8 border rounded-xl px-3 flex justify-between items-center gap-1.5" style="background-color: {{ $tag->color . '10' }}; border-color: {{ $tag->color }}">
    <span class="text-xs" style="color: {{ $tag->color }}">{{ $percentage }}%</span>
    <span class="text-xs" style="color: {{ $tag->color }}">{{ $tag->name }}</span>
</div>
