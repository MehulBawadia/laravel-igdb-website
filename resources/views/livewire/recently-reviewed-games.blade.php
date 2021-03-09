<div wire:init="loadRecentlyReviewedGames" class="recentlyReviewedContainer space-y-12 mt-8">
    @forelse ($recentlyReviewedGames as $recentlyGame)
        <div class="game bg-gray-800 rounded-lg shadow-md flex flex-col md:flex-row items-center md:items-start px-6 py-6">
            <div class="relative flex-none">
                <a href="#">
                    <img src="{{ Str::replaceFirst('thumb', 'cover_big', $recentlyGame['cover']['url']) }}" alt="{{ $recentlyGame['name'] }}" class="w-64 md:w-48 hover:opacity-75 transition ease-in-out duration-150">
                </a>
                <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full" style="bottom: -1.4rem; right: -1.4rem;">
                    <div class="h-full flex items-center justify-center font-bold text-xs">{{ round($recentlyGame['rating']) }}%</div>
                </div>
            </div>

            <div class="md:ml-12 mt-6 md:mt-0">
                <a href="#" class="block text-lg font-bold leading-tight mt-4 hover:text-indigo-500 focus:text-indigo-500">{{ $recentlyGame['name'] }}</a>

                <div class="text-gray-400 mt-1">
                    @foreach ($recentlyGame['platforms'] as $platform)
                        @if (array_key_exists('abbreviation', $platform))
                            {{ $platform['abbreviation'] }},
                        @endif
                    @endforeach
                </div>

                <p class="text-gray-400 mt-6 hidden md:block">{{ $recentlyGame['summary'] }}</p>
            </div>
        </div>
    @empty
        <div class="spinner"></div>
    @endforelse
</div>
