@extends('layouts.app')

@section('title', 'Tour Overview | ')

@section('content')

<div class="container-fluid light-grey-bg">
    <div class="container">
        <div class="p-relative">
            <h1 class="mt-lrg inline-x">Tour Overview</h1>
        </div>
        <div class="mt-sm">
            @foreach($stops as $stop)
                <p class="stop-list mr-med"><a class="nodeco" href="{{ '#' . $stop['id']  }}">{{ $stop['name'] }}</a></p>
            @endforeach
        </div>
        <div class="flex">
        @foreach($stops as $stop)
            <div id="{{ $stop['id'] }}" class="tour-overview__card flexcolumn white-bg mb-sm padded-sm">
                <h3>{{ $stop['name'] }}</h3>
                <div class="text-bold">{{ $stop['address'] }}</div>
                <p>{{ $stop['phone'] }}</p>
                <p>{{ $stop['description'] }}</p>
                @if(isset($stop['image']))
                <img class="img-responsive" src="{{ asset('img/' . $stop['image']) }}" alt="{{ $stop['name'] }}"/>
                @endif
            </div>
        @endforeach
        </div>
    </div>
</div>
@endsection
