<div wire:init="loadMostAnticipatedGames" class="mostAnticipatedContainer space-y-10 mt-8">
    @forelse ($mostAnticipatedGames as $anticipatedGame)
        <div class="game flex">
            <a href="#">
                <img src="{{ Str::replaceFirst('thumb', 'cover_small', $anticipatedGame['cover']['url']) }}" alt="{{ $anticipatedGame['name'] }}" class="w-16 hover:opacity-75 transition ease-in-out duration-150">
            </a>

            <div class="ml-4">
                <a href="#" class="hover:text-indigo-500 focus:text-indigo-500">{{ $anticipatedGame['name'] }}</a>
                <div class="text-gray-400 text-sm mt-1">{{ \Carbon\Carbon::parse($anticipatedGame['first_release_date'])->format('M d, Y') }}</div>
            </div>
        </div>
    @empty
        <div>Loading...</div>
    @endforelse
</div>
