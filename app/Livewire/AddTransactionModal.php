<?php

namespace App\Livewire;

use App\Models\Tag;
use App\Models\Transaction;
use Livewire\Attributes\Validate;
use Livewire\Component;

class AddTransactionModal extends Component
{
    public $tags;

    #[Validate('array|nullable')]
    public $selectedTags;

    #[Validate('required|integer')]
    public $amount;

    #[Validate('nullable|string')]
    public $description;

    public function mount()
    {
        $this->tags = Tag::all();
        $this->selectedTags = collect();
    }

    public function addTag(Tag $tag)
    {
        $this->selectedTags->push($tag);
        $this->selectedTags = $this->selectedTags->unique();
        $index = $this->tags->search($tag);
        $this->tags->forget($index);
    }

    public function removeTag(Tag $tag)
    {
        $index = $this->selectedTags->search($tag);
        $this->selectedTags->forget($index);
        $this->tags->push($tag);
    }

    public function saveIncome()
    {
        $this->validate();
        $this->saveTransaction(false, $this->amount, $this->description);
        $this->closeModal();
    }

    public function saveExpense()
    {
        $this->validate();
        $this->saveTransaction(true, $this->amount, $this->description);
        $this->closeModal();
    }

    public function closeModal()
    {
        $this->js('addTransModal = false');
    }

    private function saveTransaction(bool $is_expense, int $amount, ?string $description)
    {
        $user = auth()->user();
        $trans = Transaction::create([
            'amount' => $amount,
            'description' => $description,
            'is_expense' => $is_expense,
            'user_id' => $user->id,
        ]);

        $transTags = [];
        foreach ($this->selectedTags as $tag) {
            $transTags[] = [
                'user_id' => $user->id,
                'tag_id' => $tag->id,
            ];
        }
        $trans->transTags()->createMany($transTags);

        $this->dispatch('transaction-created');
    }
}
