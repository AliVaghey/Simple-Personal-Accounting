<div id="add-tag-dialog" class="fixed inset-0 hidden backdrop-blur-md justify-center items-center">
    <div class="flex justify-center items-center w-full h-full">
        <div class="w-sm border-white backdrop-blur-3xl rounded-xl flex flex-col gap-4 py-4">

            <h1 class="text-white text-center text-2xl">افزودن تگ</h1>

            <form class="flex flex-col gap-4">
                @csrf
                <div class="flex flex-col gap-2 w-11/12 mx-auto">
                    <label for="title" class="text-white text-base">عنوان</label>
                    <input id="title" type="text" wire:model.blur="name" class="h-12 bg-white rounded-lg">
                    @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
                <div class="flex flex-col gap-2 w-11/12 mx-auto">
                    <label for="color" class="text-white text-base">انتخاب رنگ</label>
                    <input id="color" type="color" wire:model.blur="color" class="h-12 bg-white rounded-lg w-full">
                </div>
            </form>

            <div class="w-full flex justify-center items-center  ">
                <button wire:click="save" class="w-36 h-11 bg-white rounded-xl cursor-pointer">ذخیره تگ</button>
            </div>
        </div>
    </div>
</div>
