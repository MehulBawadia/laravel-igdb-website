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

                <livewire:most-anticipated-games>

                <h2 class="text-indigo-500 uppercase tracking-wide font-bold mt-12">Coming Soon</h2>
                <livewire:coming-soon-games>
            </div>
        </div>
    </div>
@endsection
