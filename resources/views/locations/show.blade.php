@extends('layouts.app')

@section('title', 'Show | ')

@section('content')

<div class="container-fluid light-grey-bg">
    <div class="container">
        <div class="p-relative">
            <h1 class="mt-lrg inline-x">{{ $location->name }}</h1>
        </div>
        <div class="flex pb-lrg">
            <div class="white-bg mb-sm mr-sm padded-sm location__info-card">
                <div class="text-bold">{{ $location->address }}</div>
                <p>{{ $location->phone }}</p>
                <p>{{ $location->description }}</p>
                <div class="tour-overview__drink">
                <small>At This Stop:</small>
                <p><b><i class="fa fa-coffee" aria-hidden="true"></i> {{ $location->drink }}</b></p>
                </div>
                @if(isset($location->image))
                <div class="location__profile-image">
                    <img src="{{ asset('img/' . $location->image) }}" alt="{{ $location->name }}"/>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection