<x-layouts.main>

    <div class="flex flex-col gap-11">
        <div class="w-11/12 mx-auto pt-4 relative flex items-center">
            <div class="border cursor-pointer border-white size-9 flex justify-center items-center rounded-xl">
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 0C9.29837 0 9.58452 0.118527 9.7955 0.329505C10.0065 0.540484 10.125 0.826631 10.125 1.125V7.875H16.875C17.1734 7.875 17.4595 7.99353 17.6705 8.2045C17.8815 8.41548 18 8.70163 18 9C18 9.29837 17.8815 9.58452 17.6705 9.7955C17.4595 10.0065 17.1734 10.125 16.875 10.125H10.125V16.875C10.125 17.1734 10.0065 17.4595 9.7955 17.6705C9.58452 17.8815 9.29837 18 9 18C8.70163 18 8.41548 17.8815 8.2045 17.6705C7.99353 17.4595 7.875 17.1734 7.875 16.875V10.125H1.125C0.826631 10.125 0.540484 10.0065 0.329505 9.7955C0.118527 9.58452 0 9.29837 0 9C0 8.70163 0.118527 8.41548 0.329505 8.2045C0.540484 7.99353 0.826631 7.875 1.125 7.875H7.875V1.125C7.875 0.826631 7.99353 0.540484 8.2045 0.329505C8.41548 0.118527 8.70163 0 9 0Z" fill="white"/>
                </svg>
            </div>

            <p class="absolute left-1/2 -translate-x-1/2 text-2xl text-white">تگ‌ها</p>
        </div>

        <div  class="flex flex-col gap-4">
            <div class="w-11/12 mx-auto h-24 rounded-xl flex flex-col justify-around items-center border border-white bg-white/10">
                <div class="w-11/12 mx-auto flex justify-between items-center">
                    <p class="text-white text-2xl">نام تگ</p>
                    <div class="cursor-pointer">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.2529 2.91C23.3931 3.05059 23.4718 3.241 23.4718 3.4395C23.4718 3.63801 23.3931 3.82842 23.2529 3.969L21.6884 5.535L18.6884 2.535L20.2529 0.969002C20.3936 0.828399 20.5843 0.749413 20.7832 0.749413C20.9821 0.749413 21.1728 0.828399 21.3134 0.969002L23.2529 2.9085V2.91ZM20.6279 6.594L17.6279 3.594L7.40844 13.815C7.32588 13.8975 7.26373 13.9982 7.22694 14.109L6.01944 17.73C5.99754 17.796 5.99443 17.8668 6.01046 17.9345C6.02649 18.0022 6.06102 18.0641 6.1102 18.1132C6.15938 18.1624 6.22127 18.197 6.28895 18.213C6.35663 18.229 6.42743 18.2259 6.49344 18.204L10.1144 16.9965C10.2251 16.9601 10.3257 16.8985 10.4084 16.8165L20.6279 6.594Z" fill="#fff"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.5 20.25C1.5 20.8467 1.73705 21.419 2.15901 21.841C2.58097 22.2629 3.15326 22.5 3.75 22.5H20.25C20.8467 22.5 21.419 22.2629 21.841 21.841C22.2629 21.419 22.5 20.8467 22.5 20.25V11.25C22.5 11.0511 22.421 10.8603 22.2803 10.7197C22.1397 10.579 21.9489 10.5 21.75 10.5C21.5511 10.5 21.3603 10.579 21.2197 10.7197C21.079 10.8603 21 11.0511 21 11.25V20.25C21 20.4489 20.921 20.6397 20.7803 20.7803C20.6397 20.921 20.4489 21 20.25 21H3.75C3.55109 21 3.36032 20.921 3.21967 20.7803C3.07902 20.6397 3 20.4489 3 20.25V3.75C3 3.55109 3.07902 3.36032 3.21967 3.21967C3.36032 3.07902 3.55109 3 3.75 3H13.5C13.6989 3 13.8897 2.92098 14.0303 2.78033C14.171 2.63968 14.25 2.44891 14.25 2.25C14.25 2.05109 14.171 1.86032 14.0303 1.71967C13.8897 1.57902 13.6989 1.5 13.5 1.5H3.75C3.15326 1.5 2.58097 1.73705 2.15901 2.15901C1.73705 2.58097 1.5 3.15326 1.5 3.75V20.25Z" fill="#fff"/>
                        </svg>
                    </div>
                </div>
                <div class="w-11/12 mx-auto flex justify-between items-center">
                    <p class="text-white text-base">2000 تراکنش</p>
                    <p class="text-white text-2xl">45%</p>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="flex justify-center items-center w-full h-full">
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
    </div> -->
</x-layouts.main>
