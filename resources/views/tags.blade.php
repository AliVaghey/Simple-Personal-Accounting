<x-layouts.main>
    <div class="flex justify-center items-center w-full h-full">
        <div class="w-sm border-white backdrop-blur-3xl bg-white rounded-xl flex flex-col gap-4 py-4">

            <h1 class="text-white text-center text-2xl">افزودن تگ</h1>

            <form action="" class="flex flex-col gap-4">
                <div class="flex flex-col gap-2 w-11/12 mx-auto">
                    <label for="title" class="text-white text-base">عنوان</label>
                    <input id="title" type="text" class="h-12 bg-white rounded-lg">
                </div>
                <div class="flex flex-col gap-2 w-11/12 mx-auto">
                    <label for="color" class="text-white text-base">انتخاب رنگ</label>
                    <input id="color" type="color" class="h-12 bg-white rounded-lg w-full">
                </div>
            </form>

            <div class="w-full flex justify-center items-center  ">
                <button class="w-36 h-11 bg-white rounded-xl cursor-pointer">ذخیره تگ</button>
            </div>
        </div>
    </div>
</x-layouts.main>
