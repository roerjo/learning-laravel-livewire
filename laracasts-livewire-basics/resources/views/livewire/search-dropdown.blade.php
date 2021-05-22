<div class="p-6 text-center m-auto w-1/2">

    <h2 class="text-xl mb-4">Search Dropdown</h2>

    <input wire:model.debounce.500ms="search"
           id="search"
           class="border rounded w-full p-1"
           type="search"
           placeholder="Search for songs..."
           >

    @if($search)
        <ul>
            @forelse($search_results as $result)
                <a href="{{ $result['trackViewUrl'] ?? '#' }}"
                   class="flex border px-4 py-3 hover:bg-gray-200 transition ease-in-out duration-150"
                   target="_blank"
                   >
                    <img src="{{ $result['artworkUrl60'] }}" alt="album art" class="w-10">
                    <div class="ml-4">
                        <div class="flex font-semibold">
                            {{ $result['trackName'] ?? 'Untitled' }}
                        </div>
                        <div class="flex text-gray-600">
                            {{ $result['artistName'] ?? 'No Artist' }}
                        </div>
                    </div>
                </a>
            @empty
                <li class="px-4 py-4">No results found for "{{ $search }}"</li>
            @endforelse
        </ul>
    @endif
</div>
