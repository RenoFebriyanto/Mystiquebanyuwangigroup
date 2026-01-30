@extends('layouts.app')

@section('title', 'Destinations - Red Island Tourism')

@section('content')
    {{-- Destinations Hero Section --}}
    @include('destinations.hero')

    {{-- Highlights Section --}}
    @include('destinations.highlights')

    {{-- Petik Laut Section --}}
    @include('destinations.petik_laut')

    {{-- Pulau Merah Section --}}
    @include('destinations.pulau_merah')

    <!-- Additional sections can be added here -->
    <section class="py-32 bg-[#1E232B] px-6 lg:px-16 text-center">
        <div class="max-w-3xl mx-auto space-y-8">
            <h2 class="text-4xl font-serif text-white italic">"Where the fire of the mountain meets the pulse of the tide."
            </h2>
            <p class="text-white/60 font-light tracking-widest uppercase text-xs">Explore more sections coming soon</p>
        </div>
    </section>
@endsection
