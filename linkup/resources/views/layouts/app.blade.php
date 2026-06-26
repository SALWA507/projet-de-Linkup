<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LinkUp</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-white shadow-md">
        <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between">

            <h1 class="text-2xl font-bold text-blue-700">
                LinkUp
            </h1>

            <a href="/feed" class="text-gray-700 hover:text-blue-700">
                Feed
            </a>

        </div>
    </nav>

    <!-- Content -->
    <div class="max-w-4xl mx-auto mt-8">

        @yield('content')

    </div>

</body>
</html>
