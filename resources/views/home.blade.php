@extends('layouts.app')

@section('title', 'Red Island Tourism | Luxury Coastal Experience')

@section('content')
    <!-- Hero Section -->

    <!-- Hero Section -->
    @include('partials.section')

    <!-- About Section -->
    @include('partials.about')

    <!-- Slider Section -->
    @include('partials.slider')

    <!-- Chairman's Letter Section -->
    @include('partials.chairmans-letter')

    <!-- Services Section -->
    @include('partials.services')

    <!-- Destination Highlights -->
    @include('partials.destinations')

    <!-- Gallery Section -->
    @include('partials.gallery')

    <!-- Location & Contact -->
    @include('partials.location')

    <!-- Booking Section -->
    @include('partials.booking')

    <!-- Clients Section -->
    @include('partials.clients')
@endsection
