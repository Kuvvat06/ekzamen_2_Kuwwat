<!DOCTYPE html>
<html lang="tk">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kompýuter Store</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite("resources/css/app.css")
</head>

<body class="bg-gray-100 min-h-screen">

    <!-- Header / Navbar -->
    @include("components.header")
    @if(session('success'))
    <div style="background-color: #d4edda; color: #155724; padding: 10px; margin-bottom: 10px;">
        {{ session('success') }}
    </div>
    @endif

    @if(session('error'))
    <div style="background-color: #f8d7da; color: #721c24; padding: 10px; margin-bottom: 10px;">
        {{ session('error') }}
    </div>
    @endif


    <main class="max-w-7xl mx-auto px-4 py-8 ">
        <h2 class="text-xl font-semibold text-gray-700 mb-6">Elýeterli Kompýuterler ({{ $count }} Sany)</h2>


        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach($computers as $computer)
            <!-- Component ulanýarys -->
            <x-computer-card :computer="$computer" />
            @endforeach
        </div>
    </main>

    @if(session('success'))
    <script>
        alert("{{ session('success') }}");
    </script>
    @endif

    @include("components.footer")

</body>

</html>