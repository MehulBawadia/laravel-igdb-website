<div wire:init="loadMostAnticipatedGames" class="mostAnticipatedContainer space-y-10 mt-8">
    @forelse ($mostAnticipatedGames as $anticipatedGame)
        <x-game-card-small :game="$anticipatedGame" />
    @empty
        @foreach (range(1, 4) as $game)
            <x-game-card-small-skeleton />
        @endforeach
    @endforelse
</div>
