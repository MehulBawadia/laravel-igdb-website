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
