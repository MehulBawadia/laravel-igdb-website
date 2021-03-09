@extends('partials._layout')

@section('pageTitle')
    <title>{{ config('app.name') }} - The best gaming information website</title>
    <meta name="description" content="The best gaming information website in Mumbai, India." />
    <link rel="canonical" href="{{ url('/') }}" />
@endsection

@section('content')
    <div class="container mx-auto px-4">
        <h2 class="text-indigo-500 uppercase tracking-wide font-bold">Popular Games</h2>

        <livewire:popular-games>

        <div class="flex flex-col lg:flex-row my-10">
            <div class="recentlyReviewed w-full lg:w-3/4">
                <h2 class="text-indigo-500 uppercase tracking-wide font-bold">Recently Reviewed</h2>

                <livewire:recently-reviewed-games>
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
