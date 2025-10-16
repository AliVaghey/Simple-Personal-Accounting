<div {{ $attributes }} class="border  rounded-xl px-4 py-2 {{ $trans->is_expense ? 'bg-green-500/10 border-green-500' : 'bg-red-500/10 border-red-500'  }}">
    <div class="w-full flex justify-between {{ $trans->is_expense ? 'text-green-500' : 'text-red-500'  }}">
        <div>{{ number_format($trans->amount) }}</div>
        <div>{{ shamsi($trans->created_at) }}</div>
    </div>
    <div class="py-2 {{ $trans->is_expense ? 'text-green-500' : 'text-red-500'  }}">
        {{ $trans->description }}
    </div>
    <div class="flex flex-wrap justify-around gap-2 items-center  px-3 ">
        @foreach($trans->transTags as $transTags)
        @php($tag = $transTags->tag)
            <div
                class=" px-3 py-1 rounded-xl border border-white/20 shadow-sm"
                style="background-color: {{ $tag->color }}20; border-color: {{ $tag->color }};">
                <div
                    class="font-semibold text-sm"
                    style="color: {{ $tag->color }};">
                        {{ $tag->name }}
                </div>
            </div>
        @endforeach
    </div>
</div>
