<div
    x-data="{ show: @entangle('showModal') }"
    x-transition:enter="transition ease-out duration-150"
    x-transition:enter-start="opacity-0 scale-95"
    x-transition:enter-end="opacity-100 scale-100"
    x-transition:leave="transition ease-in duration-100"
    x-transition:leave-start="opacity-100 scale-100"
    x-transition:leave-end="opacity-0 scale-95"
    id="transaction-edit-modal"
    x-show="show"
    x-ref="update_modal"
    class="fixed top-0 left-0 inset-0 flex backdrop-blur-md justify-center items-center z-[1000]"
>
    <div class="flex justify-center items-center w-full h-full">
        <div @click.outside="$wire.showModal = false" class="w-sm border-white bg-white/25 backdrop-blur-3xl rounded-xl flex flex-col gap-4 py-4 border ">

            <h1 class="text-white text-center text-2xl">ویرایش تراکنش</h1>

            <form wire:submit="saveTransaction" class="flex flex-col items-center gap-4">
                @csrf
                <div class="flex flex-col gap-2 w-11/12 mx-auto">
                    <label for="is_expense" class="text-white text-base">خرج</label>
                    <input id="is_expense" type="checkbox" wire:model="is_expense" @input="$el.value = new Intl.NumberFormat().format($el.value.replaceAll(',', ''))" class="h-12 text-white border border-white rounded-lg">
                    @error('is_expense') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
                <div class="flex flex-col gap-2 w-11/12 mx-auto">
                    <label for="amount" class="text-white text-base">مبلغ</label>
                    <input id="amount" type="text" wire:model="amount" @input="$el.value = new Intl.NumberFormat().format($el.value.replaceAll(',', ''))" class="h-12 text-white border border-white rounded-lg">
                    @error('amount') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
                <div class="flex flex-col gap-2 w-11/12 mx-auto">
                    <label for="description" class="text-white text-base">توضیحات</label>
                    <textarea wire:model="description" class="w-full text-white border border-white rounded-lg"></textarea>
                    @error('description') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
                <button type="submit" class="w-36 h-11 bg-white rounded-xl cursor-pointer">ذخیره</button>
            </form>


        </div>
    </div>

</div>
