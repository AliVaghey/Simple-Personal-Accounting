<div
    x-show="addTransModal"
    x-transition:enter="transition ease-out duration-150"
    x-transition:enter-start="opacity-0 scale-95"
    x-transition:enter-end="opacity-100 scale-100"
    x-transition:leave="transition ease-in duration-100"
    x-transition:leave-start="opacity-100 scale-100"
    x-transition:leave-end="opacity-0 scale-95"
    id="add-trans-modal"
    class="fixed inset-0 flex backdrop-blur-md justify-center items-center"
    @click="addTransModal = false"
>
    <div class="flex justify-center items-center w-full h-full">
        <div @click.stop="" class="w-sm border-white bg-white/25 backdrop-blur-3xl rounded-xl flex flex-col gap-4 py-4 border ">

            <h1 class="text-white text-center text-2xl">تراکنش جدید</h1>

            <form class="flex flex-col items-center gap-4">
                @csrf
                <div class="flex flex-col gap-2 w-11/12 mx-auto">
                    <label for="amount" class="text-white text-base">مبلغ</label>
                    <input id="amount" type="text" wire:model.live="amount" @input="$el.value = new Intl.NumberFormat().format($el.value.replaceAll(',', ''))" class="h-12 text-white border border-white rounded-lg">
                    @error('amount') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
                <div class="flex flex-col gap-2 w-11/12 mx-auto">
                    <label for="description" class="text-white text-base">توضیحات</label>
                    <textarea wire:model.live="description" class="w-full text-white border border-white rounded-lg"></textarea>
                    @error('description') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
                <div class="text-white texl-xl">تگ ها</div>
                <div class="w-full flex flex-wrap py-4 justify-between px-4 gap-4 max-h-32 overflow-auto border border-white bg-white/25">
                    @foreach($this->selectedTags as $tag)
                        <button
                            class=" px-3 py-1 rounded-xl border border-white/20 shadow-sm"
                            style="background-color: {{ $tag->color }}20; border-color: {{ $tag->color }};"
                            wire:click="removeTag({{ $tag->id }})"
                            wire:key="selected-tag.{{ $tag->id }}"
                            type="button"
                        >
                            <div
                                class="font-semibold text-sm"
                                style="color: {{ $tag->color }};">
                                {{ $tag->name }}
                            </div>
                        </button>
                    @endforeach
                </div>
                <div class="flex flex-wrap justify-between px-4 gap-4 max-h-32 overflow-auto">
                    @foreach($tags as $tag)
                        <button
                            class=" px-3 py-1 rounded-xl border border-white/20 shadow-sm"
                            style="background-color: {{ $tag->color }}20; border-color: {{ $tag->color }};"
                            wire:click="addTag({{ $tag->id }})"
                            type="button"
                            wire:key="not-selected-tag.{{ $tag->id }}"
                        >
                            <div
                                class="font-semibold text-sm"
                                style="color: {{ $tag->color }};">
                                {{ $tag->name }}
                            </div>
                        </button>
                    @endforeach
                </div>
                <div class="space-x-4">
                    <button wire:click="saveExpense" wire:loading.attr="disabled" wire:loading.class="bg-white/20 border-white text-white" type="button" class="w-36 h-11 text-xl font-bold bg-red-700/10 text-red-500 border border-red-700 rounded-xl">ذخیره خرج</button>
                    <button wire:click="saveIncome" wire:loading.attr="disabled" wire:loading.class="bg-white/20 border-white text-white" type="button" class="w-36 h-11 text-xl font-bold bg-green-700/10 text-green-500 rounded-xl border border-green-700 cursor-pointer">ذخیره درآمد</button>
                </div>
            </form>


        </div>
    </div>
</div>
