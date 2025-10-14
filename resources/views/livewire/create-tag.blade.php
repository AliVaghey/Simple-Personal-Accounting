<form wire:submit="save" class="flex flex-col items-center gap-4">
    @csrf
    <div class="flex flex-col gap-2 w-11/12 mx-auto">
        <label for="title" class="text-white text-base">عنوان</label>
        <input id="title" type="text" wire:model.blur="name" class="h-12 text-white border border-white rounded-lg">
        @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
    </div>
    <div class="flex flex-col gap-2 w-11/12 mx-auto">
        <label for="color" class="text-white text-base">انتخاب رنگ</label>
        <input id="color" value="#ffffff" type="color" wire:model.blur="color" class="h-12 px-32 border border-white rounded-lg w-full">
        @error('color') <span class="text-red-500">{{ $message }}</span> @enderror
    </div>
    <button type="submit" class="w-36 h-11 bg-white rounded-xl cursor-pointer">ذخیره تگ</button>
</form>
