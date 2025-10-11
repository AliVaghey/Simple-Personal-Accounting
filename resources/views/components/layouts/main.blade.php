<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Personal Accounting</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body dir="rtl" class="relative m-0 p-0">

    <img class="absolute -z-50 !w-screen !h-screen" src="{{ asset('background.jpg') }}" alt="background">

    <div>
        <main>
            {{ $slot }}
        </main>
    </div>
    <nav class="absolute left-0 bottom-0 w-screen h-20 backdrop-blur bg-white/5 z-50">
        <div class="flex justify-around h-full w-full text-sm">

            <x-navagation.link href="{{ route('dashboard') }}" :name="'داشبورد'">
                <svg width="46" height="46" viewBox="0 0 46 46"  xmlns="http://www.w3.org/2000/svg">
                    <path d="M25.0326 4.31253C24.4935 3.77355 23.7623 3.47076 23 3.47076C22.2376 3.47076 21.5065 3.77355 20.9674 4.31253L1.85723 23.4198C1.72358 23.5534 1.61756 23.7121 1.54523 23.8867C1.4729 24.0613 1.43567 24.2485 1.43567 24.4375C1.43567 24.6265 1.4729 24.8137 1.54523 24.9883C1.61756 25.163 1.72358 25.3216 1.85723 25.4553C2.12716 25.7252 2.49325 25.8768 2.87498 25.8768C3.064 25.8768 3.25116 25.8396 3.42579 25.7673C3.60041 25.6949 3.75908 25.5889 3.89273 25.4553L5.74998 23.5951V38.8125C5.74998 39.9563 6.20434 41.0532 7.01309 41.8619C7.82184 42.6707 8.91874 43.125 10.0625 43.125H35.9375C37.0812 43.125 38.1781 42.6707 38.9869 41.8619C39.7956 41.0532 40.25 39.9563 40.25 38.8125V23.5951L42.1072 25.4553C42.3772 25.7252 42.7433 25.8768 43.125 25.8768C43.5067 25.8768 43.8728 25.7252 44.1427 25.4553C44.4127 25.1854 44.5643 24.8193 44.5643 24.4375C44.5643 24.0558 44.4127 23.6897 44.1427 23.4198L37.375 16.6549V7.18753C37.375 6.80628 37.2235 6.44064 36.9539 6.17106C36.6844 5.90148 36.3187 5.75003 35.9375 5.75003H33.0625C32.6812 5.75003 32.3156 5.90148 32.046 6.17106C31.7764 6.44064 31.625 6.80628 31.625 7.18753V10.9049L25.0326 4.31253ZM37.375 20.7201V38.8125C37.375 39.1938 37.2235 39.5594 36.9539 39.829C36.6844 40.0986 36.3187 40.25 35.9375 40.25H10.0625C9.68124 40.25 9.3156 40.0986 9.04602 39.829C8.77643 39.5594 8.62498 39.1938 8.62498 38.8125V20.7201L23 6.34515L37.375 20.7201Z" fill="white"/>
                </svg>
            </x-navagation.link>

            <x-navagation.link href="{{ route('transactions') }}" :name="'ریزتراکنش ها'">
                {{--                svg icon --}}
            </x-navagation.link>

{{--            Livewire add transaction component            --}}
            <button class="rounded-full bg-white text-black w-16 h-16 text-6xl pb-16">
                +
            </button>

            <x-navagation.link href="{{ route('tags') }}" :name="'تگ ها'">
                {{--                svg icon --}}
            </x-navagation.link>

            <x-navagation.link href="{{ route('statistics') }}" :name="'آمار'">
{{--                svg icon --}}
            </x-navagation.link>

        </div>
    </nav>
</body>
</html>
