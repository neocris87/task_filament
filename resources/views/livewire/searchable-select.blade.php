<div class="relative">
    <input
        type="text"
        wire:model="search"
        wire:click="$set('showDropdown', true)"
        class="w-full px-4 py-2 border rounded-lg"
        placeholder="Search..."
    >

    @if($showDropdown)
        <div class="absolute z-10 w-full mt-1 bg-white border rounded-lg shadow-lg">
            @if($filteredItems->isEmpty())
                <div class="px-4 py-2 text-gray-500">No results found</div>
            @else
                @foreach($filteredItems as $item)
                    <div
                        wire:click="selectItem('{{ $item['id'] }}', '{{ $item['name'] }}')"
                        class="px-4 py-2 cursor-pointer hover:bg-gray-100"
                    >
                        {{ $item['name'] }}
                    </div>
                @endforeach
            @endif
        </div>
    @endif
</div>
