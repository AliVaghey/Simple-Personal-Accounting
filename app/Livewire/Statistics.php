<?php

namespace App\Livewire;

use App\Http\Controllers\TransactionController;
use Livewire\Component;
use Livewire\WithPagination;

class Statistics extends Component
{
    use WithPagination;

    public $start;
    public $end;

    public $incomes;
    public $expenses;
    public $tags;
    public $percentage;
    public $summations;

    public $perPage = 10;

    public function loadMore()
    {
        $this->perPage += 10;
    }

    public function getTransactionsProperty()
    {
        return auth()
            ->user()
            ->transactions()
            ->whereBetween('created_at', [$this->start, $this->end])
            ->latest()
            ->paginate($this->perPage);
    }

    public function showStatistics()
    {
        $s = explode('/', $this->start);
        $e = explode('/', $this->end);

        $this->start = shamsi_to_gregorian($s[0], $s[1], $s[2]);
        $this->end = shamsi_to_gregorian($e[0], $e[1], $e[2]);

        $stats = TransactionController::showStats(auth()->user()->id, $this->start, $this->end);

        $this->incomes = $stats['incomes'];
        $this->expenses = $stats['expenses'];
        $this->tags = $stats['tags'];
        $this->percentage = json_encode($stats['percentage']);
        $this->summations = $stats['summations'];

        $this->js('show = true');
    }


}
