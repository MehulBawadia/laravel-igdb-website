<div wire:init="loadPopularGames" class="popularGames pb-16 text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6 gap-12 border-b border-gray-800 justify-items-center md:justify-items-auto">
    @forelse ($popularGames as $game)
        <x-game-card :game="$game" />
    @empty
        @foreach (range(1, 12) as $game)
            <div class="game mt-8">
                <div class="relative inline-block">
                    <div class="bg-gray-800 w-44 h-56"></div>
                </div>

                <div class="block text-lg text-transparent rounded leading-tight mt-4 bg-gray-700">Title goes here</div>

                <div class="text-transparent bg-gray-700 rounded mt-3 inline-block">PS4, PC, XBox One</div>
            </div>
        @endforeach
    @endforelse
</div>

@push('scripts')
    @include('partials._rating', [
        'event' => 'popularGamesLoaded',
    ])
@endpush
