<div {{ $attributes }} class="border {{ $trans->is_expense ? 'bg-green-500/10 border-green-500' : 'bg-red-500/10 border-red-500'  }}">
    <div>{{ number_format($trans->amount) }}</div>
    {{ $trans->is_expense }}
    {{ $trans->description }}
    @foreach($trans->transTags as $transTags)
        @php($tag = $transTags->tag)
        <div class="flex flex-row flex-wrap gap-4">
            <div>{{ $tag->name }}</div>
            <div>{{ $tag->color }}</div>
        </div>
    @endforeach
</div>
