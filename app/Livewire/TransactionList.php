<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class TransactionList extends Component
{
    use WithPagination;
    public $perPage = 10;

    public function loadMore()
    {
        $this->perPage += 10;
    }

    #[On('transaction-created')]
    public function getTransactionsProperty()
    {
        return auth()->user()->transactions()->latest()->paginate($this->perPage);
    }
}
