<div wire:init="loadComingSoonGames" class="comingSoonContainer space-y-10 mt-8">
    @forelse ($comingSoonGames as $awaitingGame)
        <div class="game flex">
            <a href="{{ route('games.show', $awaitingGame['slug']) }}">
                <img src="{{ $awaitingGame['coverImageUrl'] }}" alt="{{ $awaitingGame['name'] }}" class="w-16 hover:opacity-75 transition ease-in-out duration-150">
            </a>

            <div class="ml-4">
                <a href="{{ route('games.show', $awaitingGame['slug']) }}" class="hover:text-indigo-500 focus:text-indigo-500">{{ $awaitingGame['name'] }}</a>
                <div class="text-gray-400 text-sm mt-1">{{ $awaitingGame['release_date'] }}</div>
            </div>
        </div>
    @empty
        @foreach (range(1, 4) as $game)
            <div class="game flex">
                <div class="bg-gray-800 w-16 h-20 flex-none"></div>

                <div class="ml-4">
                    <div class="text-transparent bg-gray-700 rounded leading-tight">Title Goes Here Today</div>
                    <div class="text-transparent bg-gray-700 rounded inline-block mt-2">Sept 14, 2021</div>
                </div>
            </div>
        @endforeach
    @endforelse
</div>
