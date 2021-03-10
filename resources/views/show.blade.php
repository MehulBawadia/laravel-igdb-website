@extends('partials._layout')

@section('pageTitle')
    <title>Game Name Here | {{ config('app.name') }}</title>
    <meta name="description" content="The best gaming information website in Mumbai, India." />
    <link rel="canonical" href="{{ url('/show') }}" />
@endsection

@section('content')
    <div class="container mx-auto px-4">
        <div class="gameDetails border-b border-gray-800 pb-12 flex flex-col lg:flex-row">
            <div class="flex-none">
                <img src="{{ Str::replaceFirst('thumb', 'cover_big', $game['cover']['url']) }}" alt="{{ $game['name'] }}" title="Final Fantasy 7 Remake">
            </div>

            <div class="lg:ml-12 lg:mr-64">
                <h1 class="text-gray-200 uppercase tracking-wide font-bold text-4xl leading-tight mt-1">{{ $game['name'] }}</h1>

                <div class="text-gray-400 mt-3">
                    <span>
                        @foreach ($game['genres'] as $genre)
                            {{ $genre['name'] }},
                        @endforeach
                    </span> &middot;
                    <span>{{ $game['involved_companies'][0]['company']['name'] }}</span> &middot;
                    <span>
                        @foreach ($game['platforms'] as $platform)
                            @if (array_key_exists('abbreviation', $platform))
                                {{ $platform['abbreviation'] }},
                            @endif
                        @endforeach
                    </span>
                </div>

                <div class="mt-8 flex flex-wrap items-center">
                    <div class="flex items-center">
                        <div class="w-16 h-16 bg-gray-800 rounded-full">
                            <div class="h-full flex justify-center items-center font-bold text-xs">
                                {{ array_key_exists('rating', $game) ? round($game['rating']) : 0 }}%
                            </div>
                        </div>
                        <div class="ml-4 text-xs">Member <br /> Score</div>
                    </div>
                    <div class="flex items-center ml-12 mr-12 sm:mr-0">
                        <div class="w-16 h-16 bg-gray-800 rounded-full">
                            <div class="h-full flex justify-center items-center font-bold text-xs">
                                {{ array_key_exists('aggregated_rating', $game) ? round($game['aggregated_rating']) : 0 }}%
                            </div>
                        </div>
                        <div class="ml-4 text-xs">Critic <br /> Score</div>
                    </div>
                    <div class="flex items-center mt-4 sm:mt-0 sm:ml-12 space-x-4">
                        <div class="w-8 h-8 flex items-center justify-center bg-gray-800 rounded-full">
                            <a href="#" class="hover:text-indigo-500 focus:text-indigo-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 hover:text-indigo-500 focus:text-indigo-500" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </a>
                        </div>
                        <div class="w-8 h-8 flex items-center justify-center bg-gray-800 rounded-full">
                            <a href="#" class="hover:text-indigo-500 focus:text-indigo-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 hover:text-indigo-500 focus:text-indigo-500 fill-current" viewBox="0 0 24 24" stroke="currentColor"><path d="M9 8H6v4h3v12h5V12h3.642L18 8h-4V6.333C14 5.378 14.192 5 15.115 5H18V0h-3.808C10.596 0 9 1.583 9 4.615V8z"/></svg>
                            </a>
                        </div>
                        <div class="w-8 h-8 flex items-center justify-center bg-gray-800 rounded-full">
                            <a href="#" class="hover:text-indigo-500 focus:text-indigo-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 hover:text-indigo-500 focus:text-indigo-500 fill-current" viewBox="0 0 24 24" stroke="currentColor" viewBox="0 0 24 24"><path d="M24 4.557a9.83 9.83 0 01-2.828.775 4.932 4.932 0 002.165-2.724 9.864 9.864 0 01-3.127 1.195 4.916 4.916 0 00-3.594-1.555c-3.179 0-5.515 2.966-4.797 6.045A13.978 13.978 0 011.671 3.149a4.93 4.93 0 001.523 6.574 4.903 4.903 0 01-2.229-.616c-.054 2.281 1.581 4.415 3.949 4.89a4.935 4.935 0 01-2.224.084 4.928 4.928 0 004.6 3.419A9.9 9.9 0 010 19.54a13.94 13.94 0 007.548 2.212c9.142 0 14.307-7.721 13.995-14.646A10.025 10.025 0 0024 4.557z"/></svg>
                            </a>
                        </div>
                        <div class="w-8 h-8 flex items-center justify-center bg-gray-800 rounded-full">
                            <a href="#" class="hover:text-indigo-500 focus:text-indigo-500">
                                <svg class="w-5 h-5 hover:text-indigo-500 focus:text-indigo-500 fill-current" viewBox="0 0 16 18" fill="none"><g clip-path="url(#clip0)"><path d="M8.004 4.957c-2.272 0-4.104 1.804-4.104 4.04 0 2.235 1.832 4.039 4.104 4.039 2.271 0 4.103-1.804 4.103-4.04 0-2.235-1.832-4.039-4.103-4.039zm0 6.666c-1.468 0-2.668-1.178-2.668-2.627 0-1.448 1.196-2.626 2.668-2.626 1.471 0 2.667 1.178 2.667 2.626 0 1.449-1.2 2.627-2.667 2.627zm5.228-6.831a.948.948 0 01-.957.942.948.948 0 01-.957-.942.95.95 0 01.957-.942.95.95 0 01.957.942zm2.718.956c-.06-1.262-.354-2.38-1.293-3.301-.936-.921-2.071-1.21-3.353-1.273C9.982 1.1 6.02 1.1 4.7 1.174c-1.279.06-2.414.348-3.354 1.27-.939.92-1.228 2.038-1.292 3.3-.075 1.301-.075 5.2 0 6.5.06 1.263.353 2.381 1.292 3.302.94.921 2.072 1.21 3.354 1.273 1.321.074 5.282.074 6.604 0 1.282-.06 2.417-.348 3.353-1.273.936-.921 1.229-2.039 1.293-3.301.075-1.3.075-5.196 0-6.497zm-1.707 7.893a2.68 2.68 0 01-1.522 1.497c-1.053.412-3.553.317-4.717.317-1.165 0-3.668.091-4.718-.317a2.68 2.68 0 01-1.522-1.497c-.418-1.037-.321-3.498-.321-4.645 0-1.146-.093-3.61.321-4.644a2.68 2.68 0 011.522-1.497c1.053-.412 3.553-.317 4.718-.317 1.164 0 3.667-.091 4.717.317.7.274 1.24.805 1.522 1.497.418 1.037.321 3.498.321 4.644 0 1.147.097 3.611-.321 4.645z" /></g><defs><clipPath id="clip0"><path fill="#fff" d="M0 0h16v18H0z"/></clipPath></defs></svg>
                            </a>
                        </div>
                    </div>
                </div>

                <p class="mt-12">{{ $game['summary'] }}</p>

                <div class="mt-12">
                    {{-- <button class="flex bg-blue-500 text-white font-semibold px-4 py-4 hover:bg-blue-600 rounded transition ease-in-out duration-150">
                        <svg class="w-6 fill-current" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"></path><path d="M10 16.5l6-4.5-6-4.5v9zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"></path></svg>
                        <span class="ml-2">Play Trailer</span>
                    </button> --}}
                    <a href="https://youtube.com/watch/{{ $game['videos'][0]['video_id'] }}" class="inline-flex bg-blue-500 text-white font-semibold px-4 py-4 hover:bg-blue-600 rounded transition ease-in-out duration-150">
                        <svg class="w-6 fill-current" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"></path><path d="M10 16.5l6-4.5-6-4.5v9zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 83.59 8 8-3.59 8-8 8z"></path></svg>
                        <span class="ml-2">Play Trailer</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="imagesContainer border-b border-gray-800 pb-12 mt-8">
            <h2 class="text-indigo-500 uppercase tracking-wide font-bold">Images</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 mt-8">
                @foreach ($game['screenshots'] as $screenshot)
                    <div>
                        <a href="{{ Str::replaceFirst('thumb', 'screenshot_huge', $screenshot['url']) }}" target="_blank">
                            <img src="{{ Str::replaceFirst('thumb', 'screenshot_big', $screenshot['url']) }}" alt="{{ $game['name'] }} - Screenshot #{{ ++$loop->index }}" class="transition ease-in-out duration-150 hover:opacity-75" />
                        </a>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="similarGamesContainer mt-8">
            <h2 class="text-indigo-500 uppercase tracking-wide font-bold">Similar Games</h2>

            <div class="similarGames text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6 gap-12 justify-items-center md:justify-items-auto">
                @foreach ($game['similar_games'] as $similarGame)
                    <div class="game mt-8">
                        <div class="relative inline-block">
                            @if (array_key_exists('cover', $similarGame))
                                <a href="{{ route('games.show', $similarGame['slug']) }}">
                                    <img src="{{ Str::replaceFirst('thumb', 'cover_big', $similarGame['cover']['url']) }}" alt="{{ $similarGame['name'] }}" class="hover:opacity-75 transition ease-in-out duration-150">
                                </a>
                            @endif
                            @if (array_key_exists('rating', $similarGame))
                                <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="bottom: -1.4rem; right: -1.4rem;">
                                    <div class="h-full flex items-center justify-center font-bold text-xs">{{ round($similarGame['rating']) }}%</div>
                                </div>
                            @endif
                        </div>

                        <a href="{{ route('games.show', $similarGame['slug']) }}" class="block text-base font-bold leading-tight mt-8 hover:text-indigo-500 focus:text-indigo-500">{{ $similarGame['name'] }}</a>

                        <div class="text-gray-400 mt-1">
                            @if (array_key_exists('platforms', $similarGame))
                                @foreach ($similarGame['platforms'] as $platform)
                                    @if (array_key_exists('abbreviation', $platform))
                                        {{ $platform['abbreviation'] }},
                                    @endif
                                @endforeach
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
