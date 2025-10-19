<?php

namespace App\Livewire;

use App\Http\Controllers\TransactionController;
use Livewire\Component;

class Statistics extends Component
{
    public $start;
    public $end;

    public $incomes;
    public $expenses;
    public $tags;
    public $percentage;

    public function showStatistics()
    {
        $s = explode('/', $this->start);
        $e = explode('/', $this->end);

        $start = shamsi_to_gregorian($s[0], $s[1], $s[2]);
        $end = shamsi_to_gregorian($e[0], $e[1], $e[2]);

        $stats = TransactionController::showStats($start, $end);

        $this->incomes = $stats['incomes'];
        $this->expenses = $stats['expenses'];
        $this->tags = $stats['tags'];
        $this->percentage = json_encode($stats['percentage']);


        $this->js('show = true');
    }
}
