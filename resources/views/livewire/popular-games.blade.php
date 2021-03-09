<div wire:init="loadPopularGames" class="popularGames pb-16 text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6 gap-12 border-b border-gray-800 justify-items-center md:justify-items-auto">
    @forelse ($popularGames as $game)
        <div class="game mt-8">
            <div class="relative inline-block">
                <a href="#">
                    <img src="{{ Str::replaceFirst('thumb', 'cover_big', $game['cover']['url']) }}" alt="{{ $game['name'] }}" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
                <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="bottom: -1.4rem; right: -1.4rem;">
                    <div class="h-full flex items-center justify-center font-bold text-xs">{{ round($game['rating']) }}%</div>
                </div>
            </div>

            <a href="#" class="block text-base font-bold leading-tight mt-8 hover:text-indigo-500 focus:text-indigo-500">{{ $game['name'] }}</a>

            <div class="text-gray-400 mt-1">
                @foreach ($game['platforms'] as $platform)
                    @if (array_key_exists('abbreviation', $platform))
                        {{ $platform['abbreviation'] }},
                    @endif
                @endforeach
            </div>
        </div>
    @empty
        <div class="spinner"></div>
    @endforelse
</div>
