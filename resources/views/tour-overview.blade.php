@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="mt-lrg">Tour Overview</h1>
    <div class="flex">
    @foreach($stops as $stop)
        <div class="tour-overview__card {{ $stop['id'] }}">
            <h3>{{ $stop['name']  }}</h3>
            <p>{{ $stop['description'] }}</p>
            <div class="text-bold">{{ $stop['address'] }}</div>
            <p>{{ $stop['phone'] }}</p>
        </div>
    @endforeach
    </div>
    <hr/>
</div>
@endsection
