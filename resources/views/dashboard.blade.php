<x-layouts.main>

    <div class="py-9 flex flex-col items-center justify-center gap-4">
        <div>{{ shamsi(now()) }}</div>

        <x-carts.dashboard-cart :title="'امروز'"
                                :income="$currentDayStats['incomes']"
                                :expense="$currentDayStats['expenses']"
                                :percentage="json_encode($currentDayStats['percentage'])"
                                :tags="$currentDayStats['tags']"/>

        <x-carts.dashboard-cart :title="'این ماه'"
                                :income="$currentMonthStats['incomes']"
                                :expense="$currentMonthStats['expenses']"
                                :percentage="json_encode($currentMonthStats['percentage'])"
                                :tags="$currentMonthStats['tags']"
        />

        <div class="text-white text-2xl mt-5">آخرین تراکنش ها</div>
        <livewire:transaction-list />

    </div>

</x-layouts.main>
