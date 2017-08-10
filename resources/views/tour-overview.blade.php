@extends('layouts.app')

@section('title', 'Tour Overview | ')

@section('content')

<div class="container-fluid light-grey-bg">
    <div class="container">
        <div class="p-relative">
            <h1 class="mt-lrg inline-x">Tour Overview</h1>
        </div>
        <div class="mt-sm">
            @foreach($locations as $location)
                <p class="stop-list mr-med"><a class="nodeco" href="{{ '#' . $location['shortname']  }}">{{ $location['name'] }}</a></p>
            @endforeach
        </div>
        <div class="flex">
        @foreach($locations as $location)
            <div id="{{ $location['shortname'] }}" class="tour-overview__card flexcolumn white-bg mb-sm padded-sm">
                <h3>{{ $location['name'] }}</h3>
                <div class="text-bold">{{ $location['address'] }}</div>
                <p>{{ $location['phone'] }}</p>
                <p>{{ $location['description'] }}</p>
                <div class="tour-overview__drink">
                <small>At This Stop:</small>
                <p><b><i class="fa fa-coffee" aria-hidden="true"></i> {{ $location['drink'] }}</b></p>
                </div>
                @if(isset($location['image']))
                <img class="img-responsive" src="{{ asset('img/' . $location['image']) }}" alt="{{ $location['name'] }}"/>
                @endif
            </div>
        @endforeach
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script>
        fbq('track', 'Tour Overview');
    </script>
@endsection
