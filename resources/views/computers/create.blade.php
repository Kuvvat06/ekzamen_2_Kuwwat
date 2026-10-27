<!DOCTYPE html>
<html lang="tk">
<head>
    <meta charset="UTF-8">
    <title>Täze Kompýuter Goş</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-bold mb-6 text-gray-800">Täze Kompýuter Goşmak</h2>

        <form action="{{ route('computers.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">Ady</label>
                <input type="text" name="name" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">Markasy</label>
                <input type="text" name="brand" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">Bahasy ($)</label>
                <input type="number" step="0.01" name="price" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 font-medium mb-2">Surat URL</label>
                <input type="url" name="image" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="flex justify-between items-center">
                <a href="{{ route('computers.index') }}" class="text-gray-600 hover:underline">Yza dön</a>
                <button type="submit" class="bg-blue-600 text-white font-bold py-2 px-6 rounded-lg hover:bg-blue-700">Ýatda sakla</button>
            </div>
        </form>
    </div>

</body>
</html>