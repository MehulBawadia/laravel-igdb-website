<div wire:init="loadComingSoonGames" class="comingSoonContainer space-y-10 mt-8">
    @forelse ($comingSoonGames as $awaitingGame)
        <x-game-card-small :game="$awaitingGame" />
    @empty
        @foreach (range(1, 4) as $game)
            <x-game-card-small-skeleton />
        @endforeach
    @endforelse
</div>
