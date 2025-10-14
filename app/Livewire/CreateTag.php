<?php

namespace App\Livewire;

use App\Models\Tag;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateTag extends Component
{
    #[Validate('required|string')]
    public $name;

    #[Validate('hex_color|required|string')]
    public $color;

    public function save()
    {
        $this->validate();
        $user = auth()->user();
        $tag = $user->tags()->create($this->only(['name', 'color']));

    }

    public function render()
    {
        return view('livewire.create-tag');
    }
}
