<div
    x-data
    x-intersect="$wire.loadMore()"
    class=" max-h-screen py-9 flex flex-col items-center gap-5 w-11/12 mx-auto "

>
    @foreach($this->transactions as $trans)
        <x-carts.transaction-card :$trans wire:key="transaction-{{ $trans->id }}"/>
    @endforeach

    @if ($this->transactions->hasMorePages())
        <div x-intersect="$wire.loadMore()" class="text-center py-4 text-gray-500">
            Loading more...
        </div>
    @endif

    @pushonce('modals')
        <livewire:transaction-edit-modal lazy />
    @endpushonce

</div>
