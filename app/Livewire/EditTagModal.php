<?php

namespace App\Livewire;

use App\Models\Tag;
use Livewire\Attributes\Validate;
use Livewire\Component;

class EditTagModal extends Component
{
    public Tag $tag;

    #[Validate('required|string')]
    public $name;

    #[Validate('hex_color|required|string')]
    public $color;

    public function mount(Tag $tag)
    {
        $this->tag = $tag;
        $this->name = $tag->name;
        $this->color = $tag->color;
    }

    public function placeholder()
    {
        return <<<'HTML'
        <div class="flex justify-center items-center w-full h-full">
            <div  class="w-sm border-gray-400 bg-gray-400/25 backdrop-blur-3xl rounded-xl flex flex-col gap-4 py-4 border animate-pulse">
                <h1 class="text-gray-400 text-center text-2xl">ویرایش تگ</h1>
                <div class="flex flex-col items-center gap-4">
                    <div class="flex flex-col gap-2 w-11/12 mx-auto">
                        <label for="title" class="text-gray-400 text-base">عنوان</label>
                        <input id="title" type="text"   class="h-12 text-gray-400 border border-gray-400 rounded-lg" disabled>
                        @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div class="flex flex-col gap-2 w-11/12 mx-auto">
                        <label for="color" class="text-gray-400 text-base">انتخاب رنگ</label>
                        <input id="color" value="#ffffff" type="color" class="h-12 px-32 border border-gray-400 rounded-lg w-full" disabled>
                        @error('color') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <button type="button" class="w-36 h-11 bg-gray-400 rounded-xl cursor-pointer animate-pulse" disabled>ذخیره تگ</button>
                </div>
            </div>
        </div>
        HTML;
    }

    public function save()
    {
        $this->validate();
        $this->tag->name = $this->name;
        $this->tag->color = $this->color;
        $this->tag->save();
        $this->js('editModal = false');
        $this->dispatch("tag-updated.{$this->tag->id}");
    }
}
