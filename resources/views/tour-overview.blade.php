@extends('layouts.app')

@section('title', 'Tour Overview | ')

@section('content')

<div class="container">
    
    <div class="p-relative">
        <h1 class="mt-lrg inline-x">Tour Overview</h1>
    </div>
    <div class="flex">
    @foreach($stops as $stop)
        <div class="tour-overview__card {{ $stop['id'] }}">
            <h3>{{ $stop['name']  }}</h3>
            <p>{{ $stop['description'] }}</p>
            @if(isset($stop['image']))
            <img class="img-responsive" src="{{ asset('img/' . $stop['image']) }}" alt="{{ $stop['name'] }}"/>
            @endif
            <div class="text-bold">{{ $stop['address'] }}</div>
            <p>{{ $stop['phone'] }}</p>
        </div>
    @endforeach
    </div>
    <hr/>
</div>
@endsection
