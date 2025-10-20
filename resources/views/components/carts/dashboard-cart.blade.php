@php
    $percentage = json_decode($percentage, true);

    $gradientParts = [];
    $currentPercent = 0;

    foreach ($tags ?? [] as $tag) {
        $color = $tag->color;
        $percent = $percentage[$tag->id];
        $nextPercent = $currentPercent + $percent;

        $gradientParts[] = "{$color} {$currentPercent}% {$nextPercent}%";
        $currentPercent = $nextPercent;
    }

    $gradientStyle = implode(', ', $gradientParts);
@endphp

 <div {{ $attributes }} class="w-11/12  mx-auto border border-white rounded-lg backdrop-blur-xl">
        <p class="text-white text-center text-2xl py-4">{{ $title }}</p>
        <div class="flex justify-between items-center gap-4 w-11/12 mx-auto">
            <div class="flex flex-col gap-4">
                <div class="flex justify-center items-center gap-2">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.469 3.969C11.5386 3.89915 11.6214 3.84374 11.7125 3.80593C11.8036 3.76812 11.9013 3.74866 12 3.74866C12.0986 3.74866 12.1963 3.76812 12.2874 3.80593C12.3785 3.84374 12.4613 3.89915 12.531 3.969L21.531 12.969C21.6718 13.1098 21.7509 13.3008 21.7509 13.5C21.7509 13.6992 21.6718 13.8902 21.531 14.031C21.3901 14.1718 21.1991 14.2509 21 14.2509C20.8008 14.2509 20.6098 14.1718 20.469 14.031L12 5.5605L3.53097 14.031C3.39014 14.1718 3.19913 14.2509 2.99997 14.2509C2.80081 14.2509 2.6098 14.1718 2.46897 14.031C2.32814 13.8902 2.24902 13.6992 2.24902 13.5C2.24902 13.3008 2.32814 13.1098 2.46897 12.969L11.469 3.969Z" fill="#00FF00"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.469 9.969C11.5386 9.89915 11.6214 9.84374 11.7125 9.80593C11.8036 9.76812 11.9013 9.74866 12 9.74866C12.0986 9.74866 12.1963 9.76812 12.2874 9.80593C12.3785 9.84374 12.4613 9.89915 12.531 9.969L21.531 18.969C21.6718 19.1098 21.7509 19.3008 21.7509 19.5C21.7509 19.6992 21.6718 19.8902 21.531 20.031C21.3901 20.1718 21.1991 20.2509 21 20.2509C20.8008 20.2509 20.6098 20.1718 20.469 20.031L12 11.5605L3.53097 20.031C3.39014 20.1718 3.19913 20.2509 2.99997 20.2509C2.80081 20.2509 2.6098 20.1718 2.46897 20.031C2.32814 19.8902 2.24902 19.6992 2.24902 19.5C2.24902 19.3008 2.32814 19.1098 2.46897 18.969L11.469 9.969Z" fill="#00FF00"/>
                    </svg>
                    <span class="text-green-500 text-xl">{{ number_format($income) }}</span>
                </div>
                <div>
                    <div class="flex justify-center items-center gap-2">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.469 20.031C11.5386 20.1008 11.6214 20.1563 11.7125 20.1941C11.8036 20.2319 11.9013 20.2513 12 20.2513C12.0986 20.2513 12.1963 20.2319 12.2874 20.1941C12.3785 20.1563 12.4613 20.1008 12.531 20.031L21.531 11.031C21.6718 10.8902 21.7509 10.6992 21.7509 10.5C21.7509 10.3008 21.6718 10.1098 21.531 9.969C21.3901 9.82817 21.1991 9.74906 21 9.74906C20.8008 9.74906 20.6098 9.82817 20.469 9.969L12 18.4395L3.53097 9.969C3.39014 9.82817 3.19913 9.74906 2.99997 9.74906C2.80081 9.74906 2.6098 9.82817 2.46897 9.969C2.32814 10.1098 2.24902 10.3008 2.24902 10.5C2.24902 10.6992 2.32814 10.8902 2.46897 11.031L11.469 20.031Z" fill="#FF0000"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.469 14.031C11.5386 14.1008 11.6214 14.1563 11.7125 14.1941C11.8036 14.2319 11.9013 14.2513 12 14.2513C12.0986 14.2513 12.1963 14.2319 12.2874 14.1941C12.3785 14.1563 12.4613 14.1008 12.531 14.031L21.531 5.031C21.6718 4.89017 21.7509 4.69917 21.7509 4.5C21.7509 4.30084 21.6718 4.10983 21.531 3.969C21.3901 3.82817 21.1991 3.74906 21 3.74906C20.8008 3.74906 20.6098 3.82817 20.469 3.969L12 12.4395L3.53097 3.969C3.39014 3.82817 3.19913 3.74906 2.99997 3.74906C2.80081 3.74906 2.6098 3.82817 2.46897 3.969C2.32814 4.10983 2.24902 4.30084 2.24902 4.5C2.24902 4.69917 2.32814 4.89017 2.46897 5.031L11.469 14.031Z" fill="#FF0000"/>
                        </svg>
                        <span class="text-red-500 text-xl">{{ number_format($expense) }}</span>
                    </div>
                </div>
            </div>
            @php

            @endphp
            <div class="w-32 h-32 rounded-full" style="background: conic-gradient({{ $gradientStyle }});"></div>
        </div>
        <div class="flex flex-wrap justify-between items-center gap-4 w-11/12 mx-auto my-4">
            @foreach($tags ?? [] as $tag)
                <x-tag :$tag :percentage="$percentage[$tag->id]"/>
            @endforeach
        </div>
    </div>
