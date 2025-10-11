<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Personal Accounting</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="relative m-0 p-0">

    <img class="absolute -z-50 !w-screen !h-screen" src="{{ asset('background.jpg') }}" alt="background">

    <div>
        <main>
            {{ $slot }}
        </main>
    </div>
    <nav class="absolute left-0 bottom-0 w-screen h-20 backdrop-blur bg-white/5 z-50">
        <div class="flex justify-around">

        </div>
    </nav>
</body>
</html>
