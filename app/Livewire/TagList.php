<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class TagList extends Component
{
    #[On('tag-created')]
    public function getTagsProperty()
    {
        return auth()->user()->tags()->get();
    }
}
