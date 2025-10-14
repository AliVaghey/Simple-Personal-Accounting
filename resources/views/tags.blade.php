<style>
  #add-tag-dialog:target {
    display: flex;
  }
</style>


<x-layouts.main>

    <div class="flex flex-col gap-11">
        <div class="w-11/12 mx-auto pt-4 relative flex items-center">
            <div class="border cursor-pointer border-white size-9 flex justify-center items-center rounded-xl">
                 <a href="#add-tag-dialog" class="border cursor-pointer border-white size-9 flex justify-center items-center rounded-xl">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M9 0C9.29837 0 9.58452 0.118527 9.7955 0.329505C10.0065 0.540484 10.125 0.826631 10.125 1.125V7.875H16.875C17.1734 7.875 17.4595 7.99353 17.6705 8.2045C17.8815 8.41548 18 8.70163 18 9C18 9.29837 17.8815 9.58452 17.6705 9.7955C17.4595 10.0065 17.1734 10.125 16.875 10.125H10.125V16.875C10.125 17.1734 10.0065 17.4595 9.7955 17.6705C9.58452 17.8815 9.29837 18 9 18C8.70163 18 8.41548 17.8815 8.2045 17.6705C7.99353 17.4595 7.875 17.1734 7.875 16.875V10.125H1.125C0.826631 10.125 0.540484 10.0065 0.329505 9.7955C0.118527 9.58452 0 9.29837 0 9C0 8.70163 0.118527 8.41548 0.329505 8.2045C0.540484 7.99353 0.826631 7.875 1.125 7.875H7.875V1.125C7.875 0.826631 7.99353 0.540484 8.2045 0.329505C8.41548 0.118527 8.70163 0 9 0Z"
                            fill="white" />
                    </svg>
                </a>
            </div>

            <p class="absolute left-1/2 -translate-x-1/2 text-2xl text-white">تگ‌ها</p>
        </div>

        <div class="flex flex-col gap-4">
            @foreach($tags as $tag)
                <x-tag-cart  :$tag />
            @endforeach
        </div>
    </div>


    <div id="add-tag-dialog" class="fixed inset-0 hidden backdrop-blur-md justify-center items-center">
        <div class="flex justify-center items-center w-full h-full">
            <div class="w-sm border-white backdrop-blur-3xl rounded-xl flex flex-col gap-4 py-4">

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
  </div>


</x-layouts.main>
