<div class="bg-red-500 border border-gray-200 p-4 rounded-md">
    <!-- Be present above all else. - Naval Ravikant -->
    <p class="text-lg font-semibold text-gray-800 mb-4">{{ $text }}</p>
    <div class="space-y-2">
        @foreach($menuItems as $item)
            <p class="text-base text-gray-700 hover:text-blue-600 transition duration-300">{{ $item }}</p>
        @endforeach
    </div>
</div>
