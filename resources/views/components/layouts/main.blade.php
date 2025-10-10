<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Personal Accounting</title>
</head>
<body class="relative">

    <img class="absolute -z-50 w-screen h-screen" src="{{ asset('background.jpg') }}" alt="background">

    <div>
        <main>
            {{ $slot }}
        </main>
    </div>
    <nav>

    </nav>
</body>
</html>
