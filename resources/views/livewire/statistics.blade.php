<div class="flex flex-col gap-7 mb-32" x-data="{show: false}">
    <div class="border border-white rounded-xl bg-white/25 w-11/12 mx-auto mt-5">
        <div class="w-11/12 mx-auto py-4">
            <p class="text-white text-2xl text-center mb-4">آمار</p>

            <form class="flex flex-col gap-3">
                <div class="flex justify-between items-center gap-2">
                    <label for="start" class="whitespace-nowrap text-2xl text-white">از تاریخ</label>
                    <input wire:model="start" type="text" id="start" class="w-11/12 h-11 border-white rounded-xl bg-white/25">
                </div>
                <div  class="flex justify-between items-center gap-2">
                    <label for="end"  class="whitespace-nowrap text-2xl text-white">تا تاریخ</label>
                    <input wire:model="end" type="text" id="end" class="w-11/12 h-11 border-white rounded-xl bg-white/25">
                </div>
                <div class="flex justify-center items-center">
                    <button type="button" wire:click="showStatistics" class="w-2/5 h-11 bg-white rounded-xl text-2xl cursor-pointer">نمایش</button>
                </div>
            </form>
        </div></div>

    <x-carts.dashboard-cart :title="$start . ' => ' . $end" :income="$incomes" :expense="$expenses" :$percentage :$tags x-show="show" />


    @php
        $per = json_decode($percentage, true);

        $sortedTags = collect($tags)->sortByDesc(function ($tag) use ($per) {
            return $per[$tag->id] ?? 0;
        });
    @endphp

    <div x-show="show" class="flex flex-col gap-4 w-11/12 mx-auto border border-white rounded-xl bg-white/25 py-4">
        @foreach($sortedTags as $tag)
            @php($percent = $per[$tag->id] ?? 0)

            <div class="flex flex-col gap-2 w-11/12 mx-auto">
                <div class="flex justify-between items-center">
                    <p class="text-white text-sm md:text-base">{{ $tag->name }}</p>
                    <p class="text-white text-sm md:text-base">{{ $percent }}%</p>
                </div>

                <div class="text-center text-2xl text-white w-full">{{ number_format($summations[$tag->id]) }}</div>

                <div
                    class="h-4 rounded-xl transition-all duration-700"
                    style="width: {{ $percent }}%; background-color: {{ $tag->color }};">
                </div>
            </div>
        @endforeach
    </div>

    <div class="w-11/12 mx-auto flex flex-col gap-4">

        @foreach($this->transactions as $trans)
            <x-carts.transaction-card :$trans wire:key="transaction-{{ $trans->id }}"/>
        @endforeach

        @if ($this->transactions->hasMorePages())
            <div x-intersect="$wire.loadMore()" class="text-center py-4 text-gray-500">
                Loading more...
            </div>
        @endif
    </div>

</div>
