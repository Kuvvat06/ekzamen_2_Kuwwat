<div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition duration-300">

    <img class="h-48 w-full object-cover" src="{{ $computer->image }}" alt="{{ $computer->name }}">

    <div class="p-5">

        <span class="text-xs font-semibold text-blue-600 uppercase tracking-wide">
            {{ $computer->brand }}
        </span>

        
        <h3 class="mt-1 text-lg font-bold text-gray-800">
            {{ $computer->name }}
        </h3>

        
        <div class="mt-4 flex items-center justify-between">
            <span class="text-xl font-extrabold text-green-600">
                ${{ number_format($computer->price, 2) }}
            </span>

        </div>
        <div class="mt-4 flex items-center justify-between">
            <form action="{{ route('computers.destroy', $computer->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="px-4 py-2 text-sm bg-red-500 text-white rounded-lg">Pozmak</button>
            </form>
            <button class="bg-blue-600 hover:bg-blue-700 text-white text-sm font-bold py-2 px-4 rounded-lg">
                Satyn al
            </button>
        </div>
    </div>
</div>