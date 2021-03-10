<div class="game flex">
    <a href="{{ route('games.show', $game['slug']) }}">
        <img src="{{ $game['coverImageUrl'] }}" alt="{{ $game['name'] }}" class="w-16 hover:opacity-75 transition ease-in-out duration-150">
    </a>

    <div class="ml-4">
        <a href="{{ route('games.show', $game['slug']) }}" class="hover:text-indigo-500 focus:text-indigo-500">{{ $game['name'] }}</a>
        <div class="text-gray-400 text-sm mt-1">{{ $game['release_date'] }}</div>
    </div>
</div>
