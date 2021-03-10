<div wire:init="loadRecentlyReviewedGames" class="recentlyReviewedContainer space-y-12 mt-8">
    @forelse ($recentlyReviewedGames as $recentlyGame)
        <div class="game bg-gray-800 rounded-lg shadow-md flex flex-col md:flex-row items-center md:items-start px-6 py-6">
            <div class="relative flex-none">
                <a href="{{ route('games.show', $recentlyGame['slug']) }}">
                    <img src="{{ $recentlyGame['coverImageUrl'] }}" alt="{{ $recentlyGame['name'] }}" class="w-64 md:w-48 hover:opacity-75 transition ease-in-out duration-150">
                </a>
                <div id="review_{{ $recentlyGame['slug'] }}" class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full text-sm" style="bottom: -1.4rem; right: -1.4rem;">
                </div>
            </div>

            <div class="md:ml-12 mt-6 md:mt-0">
                <a href="{{ route('games.show', $recentlyGame['slug']) }}" class="block text-lg font-bold leading-tight mt-4 hover:text-indigo-500 focus:text-indigo-500">{{ $recentlyGame['name'] }}</a>

                <div class="text-gray-400 mt-1">{{ $recentlyGame['platformAbbreviations'] }}</div>

                <p class="text-gray-400 mt-6 hidden md:block">{{ $recentlyGame['summary'] }}</p>
            </div>
        </div>
    @empty
        @foreach (range(1, 3) as $game)
            <div class="game bg-gray-800 rounded-lg shadow-md flex flex-col md:flex-row items-center md:items-start px-6 py-6">
                <div class="relative flex-none">
                    <div class="bg-gray-700 w-32 lg:w-48 h-40 lg:h-56"></div>
                </div>

                <div class="md:ml-12 mt-6 md:mt-0">
                    <div class="inline-block text-lg text-transparent bg-gray-700 rounded leading-tight mt-4">Title Goes here</div>

                    <div class="mt-8 space-y-4 hidden md:block">
                        <span class="text-transparent bg-gray-700 rounded inline-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, ratione.</span>
                        <span class="text-transparent bg-gray-700 rounded inline-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, ratione.</span>
                        <span class="text-transparent bg-gray-700 rounded inline-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, ratione.</span>
                        <span class="text-transparent bg-gray-700 rounded inline-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, ratione.</span>
                    </div>
                </div>
            </div>
        @endforeach
    @endforelse
</div>

@push('scripts')
    @include('partials._rating', [
        'event' => 'recentlyReviewedGamesLoaded',
    ])
@endpush
