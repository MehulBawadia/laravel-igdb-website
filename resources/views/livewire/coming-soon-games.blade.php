<div wire:init="loadComingSoonGames" class="comingSoonContainer space-y-10 mt-8">
    @forelse ($comingSoonGames as $awaitingGame)
        <x-game-card-small :game="$awaitingGame" />
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
