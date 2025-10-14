<div
    x-data
    x-intersect="$wire.loadMore()"
    class="overflow-y-auto max-h-screen"

>
    @foreach($this->transactions as $trans)
        <x-carts.transaction-card :$trans wire:key="transaction-{{ $trans->id }}"/>
    @endforeach

    @if ($this->transactions->hasMorePages())
        <div x-intersect="$wire.loadMore()" class="text-center py-4 text-gray-500">
            Loading more...
        </div>
    @endif

</div>
