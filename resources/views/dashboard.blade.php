<x-layouts.main>

    <div class="py-9 flex flex-col items-center justify-center gap-4">
        <x-carts.dashboard-cart :title="'روز'"
                                :income="$currentDayStats['incomes']"
                                :expense="$currentDayStats['expenses']"
                                :percentage="json_encode($currentDayStats['percentage'])"
                                :tags="$currentDayStats['tags']"/>

        <x-carts.dashboard-cart :title="'ماه'"
                                :income="$currentMonthStats['incomes']"
                                :expense="$currentMonthStats['expenses']"
                                :percentage="json_encode($currentMonthStats['percentage'])"
                                :tags="$currentMonthStats['tags']"
        />

        <livewire:transaction-list />

    </div>

</x-layouts.main>
