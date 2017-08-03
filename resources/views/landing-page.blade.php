@extends('layouts.app')

@section('content')
<div class="banner container-fluid">
    <div class="banner__message">
        <h1>The Ultimate Toronto Coffee Tasting</h2>
        <p class="medium text-center pt-lrg">
            A self-guided tour of the best craft coffee in Toronto<br/>
            August 1, 2017 - November 30, 2017
        </p>
        <p class="text-center">
            <a class="btn medium text-bold banner__button" href="#purchase">GET IT</a>
        </p>
    </div>
</div>
<div class="container-fluid light-grey-bg">
    <div class="row cafe-logos pt-med">
        <div class="full-width pb-med pr-sm pl-sm">
            <h4 class="text-center"><sup>$</sup>60 worth of incredible coffee drinks and experiences, all for <sup>$</sup>27.95.</h4>
        </div>
        <div class="cafe-logos__logo logo-boxcar"></div>
        <div class="cafe-logos__logo logo-dmp"></div>
        <div class="cafe-logos__logo logo-pilot"></div>
        <div class="cafe-logos__logo logo-propeller"></div>
        <div class="cafe-logos__logo logo-sorry"></div>
        <div class="cafe-logos__logo logo-tucana"></div>
        <div class="cafe-logos__logo logo-voodoo"></div>
    </div>
    <div class="row pt-tiny pb-med">
        <h4 class="padded-sm text-center">...and more!</h4>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="preview-images flex">
            <div class="preview-images--img preview-images--neo"></div>
            <div class="preview-images--img preview-images--hot-black"></div>
            <div class="preview-images--img preview-images--pilot"></div>
            <div class="preview-images--img preview-images--jacked-up"></div>
            <div class="preview-images--img preview-images--sorry"></div>
            <div class="preview-images--img preview-images--boxcar"></div>
        </div>
    </div>
</div>
<div class="container-fluid how-it-works pt-lrg pb-lrg">
    <div class="row">
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
                <p>This keepsake quality 20-page booklet is your personal tour guide to all the coffee stops. Included are 13 coffee drinks &amp; experiences –the absolute best coffee Toronto has to offer, as curated by coffee professionals.</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="experience text-center">
            <div class="experience__description">
                <div class="yellow-x yellow-x--top-right"></div>
                <h3>Visit and Redeem</h3>
                <p>Bring your booklet and at each stop you receive a coffee drink or experience.</p>
                <p>Whether it’s a Single Origin Pourover, a Flat White, Cascara Tea or a VIP Coffee Cuppings – it’s all about sharing with you the best specialty drinks in Toronto.</p>
                <p><a class="text-heavy mb-med" href="/overview" target="_blank">Check out the full tour here.</a></p>
                <p>Over $60 worth of coffee drinks and experiences, for only $27.95. Visit the stops on your own time, from August 1<sup>st</sup> to November 30<sup>th</sup>, 2017.</p>
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
                <h3>The Ultimate Coffee Experience</h3>
                <p>Like a true tour guide, we want to share information about the drink and the café, with tips on how to get the most out of your visit. At 8 of the stops you’ll even have an audio guide that’ll take you through the drink and the café featuring conversations with someone special at each stop.</p>
                <p>We even have discounts and contests included, making this the ultimate coffee lover experience.</p>
            </div>
            <div class="extras__image">
                <img class="img-responsive" src="{{ asset('img/ipad-coffee.svg') }}"/>
            </div>
        </div>
    </div>
</div>

<div id="purchase" class="container-fluid grey-bg">
    <div class="row">
        <h2 class="text-center padded-med">Three Ways to Purchase</h2>
        <div class="purchase">
            <div class="purchase__item">
                <div class="purchase__description">
                    <h4>Craft Coffee Tour</h4>
                    <ul>
                        <li>Tour Guide Booklet</li>
                        <li>14 of the Best Craft Coffee Experiences in Toronto</li>
                        <li>Audio Interviews</li>
                        <li>In-Depth Articles on the Craft</li>
                    </ul>
                </div>
                <div class="purchase__buy">
                    <span class="purchase__price"><sup>$</sup>27<sup>.95</sup><sub>(CAD)</sub></span>
                    <div class="center-block">
                    @component('components.tour')
                    @endcomponent
                    </div>
                    <div class="purchase__discount mt-sm pt-sm pb-sm">
                        <h4 class="mb-tiny mt-tiny">GET 15% OFF</h4>
                        <p class="mt-tiny mb-tiny">
                            The first 100 people to use the coupon code "<strong>IMEARLY</strong>" will get 15% off their tour!
                        </p>
                    </div>
                </div>
            </div>
            <div class="purchase__item">
                <div class="purchase__description">
                    <h4>Craft Coffee Tour</h4>
                    <ul>
                        <li>Tour Guide Booklet</li>
                        <li>14 of the Best Craft Coffee Experiences in Toronto</li>
                        <li>Audio Interviews</li>
                        <li>In-Depth Articles on the Craft</li>
                    </ul>
                    <h4>PLUS</h4>
                    <ul>
                        <li><strong><i>33 Cups of Coffee</i> Booklet</strong></li>
                    </ul>
                </div>
                <div class="purchase__buy">
                    <span class="purchase__price"><sup>$</sup>34<sup>.95</sup><sub>(CAD)</sub></span>
                    <div class="center-block">
                        @component('components.tour-33')
                        @endcomponent
                    </div>
                    <div class="purchase__discount mt-sm pt-sm pb-sm">
                        <h4 class="mb-tiny mt-tiny">GET 15% OFF</h4>
                        <p class="mt-tiny mb-tiny">
                            The first 100 people to use the coupon code "<strong>IMEARLY</strong>" will get 15% off their tour!
                        </p>
                    </div>
                </div>
            </div>
            <div class="purchase__item">
                <div class="purchase__description">
                    <h4>Craft Coffee Tour</h4>
                    <ul>
                        <li>Tour Guide Booklet</li>
                        <li>14 of the Best Craft Coffee Experiences in Toronto</li>
                        <li>Audio Interviews</li>
                        <li>In-Depth Articles on the Craft</li>
                    </ul>
                    <h4>PLUS</h4>
                    <ul>
                        <li><strong><i>33 Cups of Coffee</i> Booklet</strong></li>
                        <li>
                            <strong>
                                Six Months of <i>The Roasters Pack</i> coffee subscription service
                            </strong>
                            <br>
                            <span class="font-small">(12oz - 3x 4oz bags, Ships Monthly)</span>
                        </li>
                    </ul>
                </div>
                <div class="purchase__buy">
                    <span class="purchase__price"><sup>$</sup>199<sup>.95</sup><sub>(CAD)</sub></span>
                    <div class="center-block">
                        @component('components.tour-33-trp')
                        @endcomponent
                    </div>
                    <div class="purchase__discount mt-sm pt-sm pb-sm">
                        <h4 class="mb-tiny mt-tiny">GET 15% OFF</h4>
                        <p class="mt-tiny mb-tiny">
                            The first 100 people to use the coupon code "<strong>IMEARLY</strong>" will get 15% off their tour!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid grey-bg">
    <div class="row text-center">
        <h3 class="flag">Crafty Add-ons</h3>
    </div>
    <div class="row thirty-three">
        <div class="image"></div>
        <div class="description-wrapper">
            <div class="description">
                <h3>33 Cups of Coffee</h3>
                <p>An amazing pocket-sized coffee journal that you can use to track flavour profiles, brew thoughts, tasting notes and coffee ratings!</p>
            </div>
        </div>
    </div>
    <div class="row roasters-pack">
        <div class="description-wrapper">
            <div class="description">
                <h3>The Roasters Pack</h3>
                <p>Expand your coffee knowledge to all across Canada. The Roasters Pack is a monthly coffee subscription where we bring you three of the countries top roasts fresh to you in the mail. Includes tasting notes, brew guides and stories about the brews you drink.</p>
            </div>
        </div>
        <div class="image"></div>
    </div>
</div>

@endsection

@section('scripts')

    <!-- Buy Button Scripts -->
    @component('components.buy-button-scripts')
    @endcomponent

@endsection
