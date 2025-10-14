<?php

namespace App\Livewire;

use App\Models\Tag;
use Livewire\Attributes\On;
use Livewire\Component;

class TagList extends Component
{
    public $tagID;
    public $name;
    public $color;

    public function edit($id)
    {
        $tag = Tag::findOrFail($id);
        $this->tagID = $id;
        $this->name = $tag->name;
        $this->color = $tag->color;
        $this->dispatch('openEditModal');
    }

    #[On('tag-created')]
    public function getTagsProperty()
    {
        return auth()->user()->tags()->get();
    }
}
