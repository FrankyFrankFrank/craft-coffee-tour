@extends('layouts.app')

@section('content')
<div class="banner container-fluid yellow-bg">
    <div class="banner__message">
        <h1>The Ultimate Toronto Coffee Guide</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.</p>
        <p>
        <a class="btn btn-primary btn-lg">Join</a>
        </p>
    </div>
</div>
<div class="container-fluid">
    <div class="how-it-works row">
        <div class="col-md-12 text-center">
            <h2>How It Works</h2>
        </div>
    </div>
    <div class="row">
        <div class="passport">
            <div class="passport__image">
                <img class="img-responsive" src="{{ asset('img/passport.svg') }}"/>
            </div>
            <div class="passport__description">
                <div class="yellow-x yellow-x--top-left"></div>
                <h3>Get Your Tour Guide Booklet</h3>
                <p>This keepsake quality 40-page booklet is your personal guide to all the stops in the tour and your pass to enjoy some of the finest coffee drinks Toronto has to offer.</p>
                <p>Includes lots of great information about the cafes, roasters, baristas, and coffees as well a guide to tasting and picking great coffees.</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="experience text-center">
            <div class="experience__description">
                <div class="yellow-x yellow-x--top-right"></div>
                <h3>Have new coffee experiences</h3>
                <p>14 highly recommended locations where you can try hand-picked selections from the experts themselves.</p>
                <p>Enjoy everything from an award-winning flat white to a VIP coffee cupping.</p>
                <p>All together these stops make up an incredible value.</p>
            </div>
            <div class="experience__image">
                <img class="img-responsive" src="{{ asset('img/coffee-shop.svg') }}"/>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="extras">
            <div class="extras__description">
                <div class="yellow-x yellow-x--top-middle"></div>
                <h3>Keep the Tour Going</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            <div class="extras__image">
                <img class="img-responsive" src="{{ asset('img/ipad-coffee.svg') }}"/>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid grey-bg">
    <div class="row">
        <div class="purchase">
            <div class="purchase__item">
                <img src="https://unsplash.it/760/360" class="img-responsive"/>
                <h4>Purchase the Tour Guide</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua.</p>
                <div class="center-block">
                @component('components.buy-button')
                @endcomponent
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
