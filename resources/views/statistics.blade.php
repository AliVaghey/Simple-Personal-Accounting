<x-layouts.main>

<div class="flex flex-col gap-7 mb-32">
    <div class="border border-white rounded-xl bg-white/25 w-11/12 mx-auto mt-5">
        <div class="w-11/12 mx-auto py-4">
        <p class="text-white text-2xl text-center mb-4">آمار</p>

        <form class="flex flex-col gap-3">
            <div class="flex justify-between items-center gap-2">
                <label for="start" class="whitespace-nowrap text-2xl text-white">از تاریخ</label>
                <input type="text" id="start" class="w-11/12 h-11 border-white rounded-xl bg-white/25">
            </div>
            <div  class="flex justify-between items-center gap-2">
                <label for="end"  class="whitespace-nowrap text-2xl text-white">تا تاریخ</label>
                <input type="text" id="end" class="w-11/12 h-11 border-white rounded-xl bg-white/25">
            </div>
            <div class="flex justify-center items-center">
                <button class="w-2/5 h-11 bg-white rounded-xl text-2xl">نمایش</button>
            </div>
        </form>
    </div></div>
    <x-carts.dashboard-cart   />

    <div class="flex flex-col gap-2 w-11/12 mx-auto  border  border-white rounded-xl bg-white/25">
        <div class="flex flex-col gap-2 w-11/12 mx-auto py-3">
            <div class="flex justify-between items-center">
                <p class="text-white">تگ اول</p>
                <p class="text-white">100%</p>
            </div>
            <div class="w-full rounded-xl h-4 bg-rose-400"></div>
        </div>
        <div class="flex flex-col gap-2 w-11/12 mx-auto py-3">
            <div class="flex justify-between items-center">
                <p class="text-white">تگ دوم</p>
                <p class="text-white">50%</p>
            </div>
            <div class="w-2/4 rounded-xl h-4 bg-cyan-400"></div>
        </div>
    </div>
    <h1 class="text-white text-2xl text-center">تراکنش ها</h1>
    <livewire:transaction-list />
    </div>
</x-layouts.main>
