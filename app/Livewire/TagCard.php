<?php

namespace App\Livewire;

use App\Models\Tag;
use Livewire\Attributes\On;
use Livewire\Component;

class TagCard extends Component
{
    public Tag $tag;

    #[On('tag-updated.{tag.id}')]
    public function render()
    {
        return view('livewire.tag-card');
    }
}
