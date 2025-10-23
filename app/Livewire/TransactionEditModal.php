<?php

namespace App\Livewire;

use App\Models\Transaction;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;

class TransactionEditModal extends Component
{
    public bool $showModal = false;

    public ?Transaction $transaction = null;

    #[Validate('required')]
    public $amount;

    public $description;

    public bool $is_expense;


    public function closeModal()
    {
        $this->showModal = false;
    }

    public function saveTransaction()
    {
        if ($this->transaction->user_id == auth()->user()->id) {
            $this->transaction->fill([
                'amount' => str_replace(',', '', $this->amount),
                'description' => $this->description,
                'is_expense' => $this->is_expense,
            ])->save();
        }

        $this->dispatch('transaction-created');
        $this->closeModal();
        $this->reset();
    }

    #[On('transaction-card-clicked')]
    public function openModal(int $id)
    {
        $this->transaction = Transaction::findOrFail($id);
        if ($this->transaction->user_id == auth()->user()->id) {
            $this->showModal = true;
            $this->is_expense = $this->transaction->is_expense;
            $this->description = $this->transaction->description;
            $this->amount = number_format($this->transaction->amount);
        }
    }
}
