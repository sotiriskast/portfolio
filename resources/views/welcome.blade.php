@extends('layouts.master')

@section('content')

    @include('pages.about')
    @include('pages.facts')
    @include('pages.skills')
    @include('pages.resume')
    @include('pages.portfolio')
    @include('pages.services')

    @livewire('contact-us')

@endsection
