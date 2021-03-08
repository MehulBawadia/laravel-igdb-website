@extends('partials._layout')

@section('pageTitle')
    <title>{{ config('app.name') }} - The best gaming information website</title>
    <meta name="description" content="The best gaming information website in Mumbai, India." />
    <link rel="canonical" href="{{ url('/') }}" />
@endsection

@section('content')
    <div class="container mx-auto px-4">
        <h2 class="text-indigo-500 uppercase tracking-wide font-bold">Popular Games</h2>

        <div class="popularGames pb-16 text-sm grid grid-cols-6 gap-12 border-b border-gray-800">
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="{{ asset('/images/ff7.jpg') }}" alt="Final Fantasy 7 Remake" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="bottom: -1.4rem; right: -1.4rem;">
                        <div class="h-full flex items-center justify-center font-bold text-xs">80%</div>
                    </div>
                </div>

                <a href="#" class="block text-base font-bold leading-tight mt-8 hover:text-indigo-500 focus:text-indigo-500">Final Fantasy 7 Remake</a>

                <div class="text-gray-400 mt-1">PlayStation 4</div>
            </div>

            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="{{ asset('/images/animal-crossing.jpg') }}" alt="Animal Crossing" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="bottom: -1.4rem; right: -1.4rem;">
                        <div class="h-full flex items-center justify-center font-bold text-xs">80%</div>
                    </div>
                </div>

                <a href="#" class="block text-base font-bold leading-tight mt-8 hover:text-indigo-500 focus:text-indigo-500">Animal Crossing</a>

                <div class="text-gray-400 mt-1">Ninetendo Switch</div>
            </div>

            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="{{ asset('/images/doom.jpg') }}" alt="Doom Eternal" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="bottom: -1.4rem; right: -1.4rem;">
                        <div class="h-full flex items-center justify-center font-bold text-xs">80%</div>
                    </div>
                </div>

                <a href="#" class="block text-base font-bold leading-tight mt-8 hover:text-indigo-500 focus:text-indigo-500">Doom Eternal</a>

                <div class="text-gray-400 mt-1">PlayStation 4, PC</div>
            </div>

            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="{{ asset('/images/alyx.jpg') }}" alt="Half Life: Alyx" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="bottom: -1.4rem; right: -1.4rem;">
                        <div class="h-full flex items-center justify-center font-bold text-xs">80%</div>
                    </div>
                </div>

                <a href="#" class="block text-base font-bold leading-tight mt-8 hover:text-indigo-500 focus:text-indigo-500">Half Life: Alyx</a>

                <div class="text-gray-400 mt-1">PC</div>
            </div>

            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="{{ asset('/images/luigi.jpg') }}" alt="Luigi's Mansion 3" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="bottom: -1.4rem; right: -1.4rem;">
                        <div class="h-full flex items-center justify-center font-bold text-xs">80%</div>
                    </div>
                </div>

                <a href="#" class="block text-base font-bold leading-tight mt-8 hover:text-indigo-500 focus:text-indigo-500">Luigi's Mansion 3</a>

                <div class="text-gray-400 mt-1">Ninetendo Switch</div>
            </div>

            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="{{ asset('/images/resident-evil.jpg') }}" alt="Resident Evil 3" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="bottom: -1.4rem; right: -1.4rem;">
                        <div class="h-full flex items-center justify-center font-bold text-xs">80%</div>
                    </div>
                </div>

                <a href="#" class="block text-base font-bold leading-tight mt-8 hover:text-indigo-500 focus:text-indigo-500">Resident Evil 3</a>

                <div class="text-gray-400 mt-1">PC, PlayStation 4, XBox One X</div>
            </div>

            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="{{ asset('/images/resident-evil.jpg') }}" alt="Resident Evil 3" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="bottom: -1.4rem; right: -1.4rem;">
                        <div class="h-full flex items-center justify-center font-bold text-xs">80%</div>
                    </div>
                </div>

                <a href="#" class="block text-base font-bold leading-tight mt-8 hover:text-indigo-500 focus:text-indigo-500">Resident Evil 3</a>

                <div class="text-gray-400 mt-1">PC, PlayStation 4, XBox One X</div>
            </div>

            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="{{ asset('/images/luigi.jpg') }}" alt="Luigi's Mansion 3" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="bottom: -1.4rem; right: -1.4rem;">
                        <div class="h-full flex items-center justify-center font-bold text-xs">80%</div>
                    </div>
                </div>

                <a href="#" class="block text-base font-bold leading-tight mt-8 hover:text-indigo-500 focus:text-indigo-500">Luigi's Mansion 3</a>

                <div class="text-gray-400 mt-1">Ninetendo Switch</div>
            </div>

            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="{{ asset('/images/alyx.jpg') }}" alt="Half Life: Alyx" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="bottom: -1.4rem; right: -1.4rem;">
                        <div class="h-full flex items-center justify-center font-bold text-xs">80%</div>
                    </div>
                </div>

                <a href="#" class="block text-base font-bold leading-tight mt-8 hover:text-indigo-500 focus:text-indigo-500">Half Life: Alyx</a>

                <div class="text-gray-400 mt-1">PC</div>
            </div>

            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="{{ asset('/images/doom.jpg') }}" alt="Doom Eternal" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="bottom: -1.4rem; right: -1.4rem;">
                        <div class="h-full flex items-center justify-center font-bold text-xs">80%</div>
                    </div>
                </div>

                <a href="#" class="block text-base font-bold leading-tight mt-8 hover:text-indigo-500 focus:text-indigo-500">Doom Eternal</a>

                <div class="text-gray-400 mt-1">PlayStation 4, PC</div>
            </div>

            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="{{ asset('/images/animal-crossing.jpg') }}" alt="Animal Crossing" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="bottom: -1.4rem; right: -1.4rem;">
                        <div class="h-full flex items-center justify-center font-bold text-xs">80%</div>
                    </div>
                </div>

                <a href="#" class="block text-base font-bold leading-tight mt-8 hover:text-indigo-500 focus:text-indigo-500">Animal Crossing</a>

                <div class="text-gray-400 mt-1">Ninetendo Switch</div>
            </div>

            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="{{ asset('/images/ff7.jpg') }}" alt="Final Fantasy 7 Remake" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="bottom: -1.4rem; right: -1.4rem;">
                        <div class="h-full flex items-center justify-center font-bold text-xs">80%</div>
                    </div>
                </div>

                <a href="#" class="block text-base font-bold leading-tight mt-8 hover:text-indigo-500 focus:text-indigo-500">Final Fantasy 7 Remake</a>

                <div class="text-gray-400 mt-1">PlayStation 4</div>
            </div>
        </div>

        <div class="flex my-10">
            <div class="recentlyReviewed w-3/4">
                <h2 class="text-indigo-500 uppercase tracking-wide font-bold">Recently Reviewed</h2>

                <div class="recentlyReviewedContainer space-y-12 mt-8">
                    <div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
                        <div class="relative flex-none">
                            <a href="#">
                                <img src="{{ asset('/images/ff7.jpg') }}" alt="Final Fantasy 7 Remake" class="w-48 hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                            <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full" style="bottom: -1.4rem; right: -1.4rem;">
                                <div class="h-full flex items-center justify-center font-bold text-xs">80%</div>
                            </div>
                        </div>

                        <div class="ml-12">
                            <a href="#" class="block text-lg font-bold leading-tight mt-4 hover:text-indigo-500 focus:text-indigo-500">Final Fantasy 7 Remake</a>

                            <div class="text-gray-400 mt-1">PlayStation 4</div>

                            <p class="text-gray-400 mt-6">
                                A spectacular re-imagining of one of the most visionary games ever, Final Fantasy VII Remake rebuilds and expands the legendary RPG for today. The first game in this project will be set in the eclectic city of Midgar and presents a fully standalone gaming experience.
                            </p>
                        </div>
                    </div>
                    <div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
                        <div class="relative flex-none">
                            <a href="#">
                                <img src="{{ asset('/images/doom.jpg') }}" alt="Doom Eternal" class="w-48 hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                            <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full" style="bottom: -1.4rem; right: -1.4rem;">
                                <div class="h-full flex items-center justify-center font-bold text-xs">80%</div>
                            </div>
                        </div>

                        <div class="ml-12">
                            <a href="#" class="block text-lg font-bold leading-tight mt-4 hover:text-indigo-500 focus:text-indigo-500">Doom Eternal</a>

                            <div class="text-gray-400 mt-1">PlayStation 4, PC</div>

                            <p class="text-gray-400 mt-6">
                                A spectacular re-imagining of one of the most visionary games ever, Final Fantasy VII Remake rebuilds and expands the legendary RPG for today. The first game in this project will be set in the eclectic city of Midgar and presents a fully standalone gaming experience.
                            </p>
                        </div>
                    </div>
                    <div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
                        <div class="relative flex-none">
                            <a href="#">
                                <img src="{{ asset('/images/animal-crossing.jpg') }}" alt="Animal Crossing" class="w-48 hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                            <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full" style="bottom: -1.4rem; right: -1.4rem;">
                                <div class="h-full flex items-center justify-center font-bold text-xs">80%</div>
                            </div>
                        </div>

                        <div class="ml-12">
                            <a href="#" class="block text-lg font-bold leading-tight mt-4 hover:text-indigo-500 focus:text-indigo-500">Animal Crossing</a>

                            <div class="text-gray-400 mt-1">Ninento Switch</div>

                            <p class="text-gray-400 mt-6">
                                A spectacular re-imagining of one of the most visionary games ever, Final Fantasy VII Remake rebuilds and expands the legendary RPG for today. The first game in this project will be set in the eclectic city of Midgar and presents a fully standalone gaming experience.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mostAnticipated w-1/4 ml-32">
                <h2 class="text-indigo-500 uppercase tracking-wide font-bold">Most Aniticipated</h2>
                <div class="mostAnticipatedContainer space-y-10 mt-8">
                    <div class="game flex">
                        <a href="#">
                            <img src="{{ asset('/images/cyberpunk.jpg') }}" alt="Cyberpunk" class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                        </a>

                        <div class="ml-4">
                            <a href="#" class="hover:text-indigo-500 focus:text-indigo-500">Cyberpunk 2077</a>
                            <div class="text-gray-400 text-sm mt-1">Sept 16, 2020</div>
                        </div>
                    </div>
                    <div class="game flex">
                        <a href="#">
                            <img src="{{ asset('/images/avengers.jpg') }}" alt="Marvel's Avengers" class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                        </a>

                        <div class="ml-4">
                            <a href="#" class="hover:text-indigo-500 focus:text-indigo-500">Marvel's Avengers</a>
                            <div class="text-gray-400 text-sm mt-1">Sept 3, 2020</div>
                        </div>
                    </div>
                    <div class="game flex">
                        <a href="#">
                            <img src="{{ asset('/images/ghost.jpg') }}" alt="Ghost of Tsushima" class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                        </a>

                        <div class="ml-4">
                            <a href="#" class="hover:text-indigo-500 focus:text-indigo-500">Ghost of Tsushima</a>
                            <div class="text-gray-400 text-sm mt-1">July 17, 2020</div>
                        </div>
                    </div>
                    <div class="game flex">
                        <a href="#">
                            <img src="{{ asset('/images/tlou2.jpg') }}" alt="The Last of Us Part II" class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                        </a>

                        <div class="ml-4">
                            <a href="#" class="hover:text-indigo-500 focus:text-indigo-500">The Last of Us Part II</a>
                            <div class="text-gray-400 text-sm mt-1">June 19, 2020</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
