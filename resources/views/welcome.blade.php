@extends('partials._layout')

@section('pageTitle')
    <title>{{ config('app.name') }} - The best gaming information website</title>
    <meta name="description" content="The best gaming information website in Mumbai, India." />
    <link rel="canonical" href="{{ url('/') }}" />
@endsection

@section('content')
    <div class="container mx-auto px-4">
        <h2 class="text-indigo-500 uppercase tracking-wide font-bold">Popular Games</h2>

        <div class="popularGames pb-16 text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6 gap-12 border-b border-gray-800 justify-items-center md:justify-items-auto">
            @foreach ($popularGames as $game)
                <div class="game mt-8">
                    <div class="relative inline-block">
                        <a href="#">
                            <img src="{{ Str::replaceFirst('thumb', 'cover_big', $game['cover']['url']) }}" alt="{{ $game['name'] }}" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="bottom: -1.4rem; right: -1.4rem;">
                            <div class="h-full flex items-center justify-center font-bold text-xs">{{ round($game['rating']) }}%</div>
                        </div>
                    </div>

                    <a href="#" class="block text-base font-bold leading-tight mt-8 hover:text-indigo-500 focus:text-indigo-500">{{ $game['name'] }}</a>

                    <div class="text-gray-400 mt-1">
                        @foreach ($game['platforms'] as $platform)
                            @if (array_key_exists('abbreviation', $platform))
                                {{ $platform['abbreviation'] }},
                            @endif
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>

        <div class="flex flex-col lg:flex-row my-10">
            <div class="recentlyReviewed w-full lg:w-3/4">
                <h2 class="text-indigo-500 uppercase tracking-wide font-bold">Recently Reviewed</h2>

                <div class="recentlyReviewedContainer space-y-12 mt-8">
                    @foreach ($recentlyReviewed as $recentlyGame)
                        <div class="game bg-gray-800 rounded-lg shadow-md flex flex-col md:flex-row items-center md:items-start px-6 py-6">
                            <div class="relative flex-none">
                                <a href="#">
                                    <img src="{{ Str::replaceFirst('thumb', 'cover_big', $recentlyGame['cover']['url']) }}" alt="{{ $recentlyGame['name'] }}" class="w-64 md:w-48 hover:opacity-75 transition ease-in-out duration-150">
                                </a>
                                <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full" style="bottom: -1.4rem; right: -1.4rem;">
                                    <div class="h-full flex items-center justify-center font-bold text-xs">{{ round($game['rating']) }}%</div>
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
                    @endforeach
                    {{-- <div class="game bg-gray-800 rounded-lg shadow-md flex flex-col md:flex-row items-center md:items-start px-6 py-6">
                        <div class="relative flex-none">
                            <a href="#">
                                <img src="{{ asset('/images/doom.jpg') }}" alt="Doom Eternal" class="w-64 md:w-48 hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                            <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full" style="bottom: -1.4rem; right: -1.4rem;">
                                <div class="h-full flex items-center justify-center font-bold text-xs">80%</div>
                            </div>
                        </div>

                        <div class="md:ml-12 mt-6 md:mt-0">
                            <a href="#" class="block text-lg font-bold leading-tight mt-4 hover:text-indigo-500 focus:text-indigo-500">Doom Eternal</a>

                            <div class="text-gray-400 mt-1">PlayStation 4, PC</div>

                            <p class="text-gray-400 mt-6 hidden md:block">
                                A spectacular re-imagining of one of the most visionary games ever, Final Fantasy VII Remake rebuilds and expands the legendary RPG for today. The first game in this project will be set in the eclectic city of Midgar and presents a fully standalone gaming experience.
                            </p>
                        </div>
                    </div>
                    <div class="game bg-gray-800 rounded-lg shadow-md flex flex-col md:flex-row items-center md:items-start px-6 py-6">
                        <div class="relative flex-none">
                            <a href="#">
                                <img src="{{ asset('/images/animal-crossing.jpg') }}" alt="Animal Crossing" class="w-64 md:w-48 hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                            <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full" style="bottom: -1.4rem; right: -1.4rem;">
                                <div class="h-full flex items-center justify-center font-bold text-xs">80%</div>
                            </div>
                        </div>

                        <div class="md:ml-12 mt-6 md:mt-0">
                            <a href="#" class="block text-lg font-bold leading-tight mt-4 hover:text-indigo-500 focus:text-indigo-500">Animal Crossing</a>

                            <div class="text-gray-400 mt-1">Ninento Switch</div>

                            <p class="text-gray-400 mt-6 hidden md:block">
                                A spectacular re-imagining of one of the most visionary games ever, Final Fantasy VII Remake rebuilds and expands the legendary RPG for today. The first game in this project will be set in the eclectic city of Midgar and presents a fully standalone gaming experience.
                            </p>
                        </div>
                    </div> --}}
                </div>
            </div>

            <div class="mostAnticipated mt-12 lg:mt-0 lg:w-1/4 lg:ml-32">
                <h2 class="text-indigo-500 uppercase tracking-wide font-bold">Most Aniticipated</h2>
                <div class="mostAnticipatedContainer space-y-10 mt-8">
                    @foreach ($mostAnticipated as $anticipatedGame)
                        <div class="game flex">
                            <a href="#">
                                <img src="{{ Str::replaceFirst('thumb', 'cover_small', $anticipatedGame['cover']['url']) }}" alt="{{ $anticipatedGame['name'] }}" class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                            </a>

                            <div class="ml-4">
                                <a href="#" class="hover:text-indigo-500 focus:text-indigo-500">{{ $anticipatedGame['name'] }}</a>
                                <div class="text-gray-400 text-sm mt-1">{{ \Carbon\Carbon::parse($anticipatedGame['first_release_date'])->format('M d, Y') }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <h2 class="text-indigo-500 uppercase tracking-wide font-bold mt-12">Coming Soon</h2>
                <div class="comingSoonContainer space-y-10 mt-8">
                    @foreach ($comingSoonGames as $awaitingGame)
                        <div class="game flex">
                            <a href="#">
                                <img src="{{ Str::replaceFirst('thumb', 'cover_small', $awaitingGame['cover']['url']) }}" alt="{{ $awaitingGame['name'] }}" class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                            </a>

                            <div class="ml-4">
                                <a href="#" class="hover:text-indigo-500 focus:text-indigo-500">{{ $awaitingGame['name'] }}</a>
                                <div class="text-gray-400 text-sm mt-1">{{ \Carbon\Carbon::parse($awaitingGame['first_release_date'])->format('M d, Y') }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
