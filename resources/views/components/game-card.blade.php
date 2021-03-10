<div class="game mt-8">
    <div class="relative inline-block">
        <a href="{{ route('games.show', $game['slug']) }}">
            <img src="{{ $game['coverImageUrl'] }}" alt="{{ $game['name'] }}" class="hover:opacity-75 transition ease-in-out duration-150">
        </a>
        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="bottom: -1.4rem; right: -1.4rem;">
            <div class="h-full flex items-center justify-center font-bold text-xs">{{ $game['rating'] }}</div>
        </div>
    </div>

    <a href="{{ route('games.show', $game['slug']) }}" class="block text-base font-bold leading-tight mt-8 hover:text-indigo-500 focus:text-indigo-500">{{ $game['name'] }}</a>

    <div class="text-gray-400 mt-1">{{ $game['platformAbbreviations'] }}</div>
</div>
