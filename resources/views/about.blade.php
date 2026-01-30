@extends('layouts.app')

@section('title', 'About Us - PT. Mystique Banyuwangi Group')

@section('content')
    {{-- About Hero Section --}}
    @include('about.hero')

    {{-- Vision & History Section --}}
    @include('about.vision')

    {{-- Company Identity & Logo Philosophy Section --}}
    @include('about.philosophy')

    {{-- Executive Team Section --}}
    @include('about.team')

    {{-- Services Section --}}
    @include('about.services')
@endsection
