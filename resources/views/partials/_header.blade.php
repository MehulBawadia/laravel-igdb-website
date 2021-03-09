<header class="border-b border-gray-800">
    <nav class="container mx-auto flex flex-col lg:flex-row items-center justify-between px-4 py-6">
        <div class="flex flex-col lg:flex-row items-center">
            <a href="{{ url('/') }}" class="flex-none uppercase text-indigo-300 font-bold text-3xl outline-none hover:text-indigo-500 focus:text-indigo-500" title="Go to {{ config('app.name') }} home page">{{ config('app.name') }}</a>

            <ul class="flex items-center lg:ml-16 space-x-8 mt-6 lg:mt-0">
                <li><a href="#" class="outline-none hover:text-indigo-500 focus:text-indigo-500">Games</a></li>
                <li><a href="#" class="outline-none hover:text-indigo-500 focus:text-indigo-500">Reviews</a></li>
                <li><a href="#" class="outline-none hover:text-indigo-500 focus:text-indigo-500">Coming Soon</a></li>
            </ul>
        </div>
        <div class="flex items-center mt-6 lg:mt-0">
            <div class="relative">
                <input type="text" class="bg-gray-800 text-small rounded-full w-64 pl-8 py-1 outline-none focus:border-indigo-500 focus:ring" placeholder="Search Games..." />

                <div class="absolute top-0 flex items-center h-full ml-2">
                    <svg class="fill-current text-gray-100 w-4" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                </div>
            </div>
            <div class="ml-6">
                <a href="#"><img src="{{ asset('/images/avatar.png') }}" alt="Default Avatar" title="Default Avatar" class="rounded-full w-8" /></a>
            </div>
        </div>
    </nav>
</header>
