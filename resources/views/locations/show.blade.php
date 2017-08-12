@extends('layouts.app')

@section('title', $location->name . ' | ')

@section('content')

<div class="container-fluid light-grey-bg">
    <div class="container">
        <p class="mt-lrg"><a href="/locations"><a href="/locations"><i class="fa fa-chevron-left" aria-hidden="true"></i> All Locations</a></p>
        <div class="flex pb-lrg">
            <div class="white-bg mb-sm mr-sm padded-med location__article">
                <div class="p-relative">
                    <h1 class="inline-x">{{ $location->name }}</h1>
                </div>
                <p>{{$location->article}}</p>
                @if(isset($podcast))
                <iframe 
                    width="100%" 
                    height="60" 
                    src="https://www.mixcloud.com/widget/iframe/?feed={{rawurlencode($podcast->src)}}&hide_cover=1&mini=1&light=1" 
                    frameborder="0">
                </iframe>
                @endif
            </div>
            <div class="white-bg mb-sm padded-sm location__info-card">
                <div class="text-bold">{{ $location->address }}</div>
                <p>{{ $location->phone }}</p>
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