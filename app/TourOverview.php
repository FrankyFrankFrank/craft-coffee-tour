<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TourOverview extends Model
{
    function __construct() {
    	$this->stops = [
    		[
    			'id' => 'propeller',
    			'name' => 'Propeller Coffee Co.',
    			'description' => '“We look for unique coffees, and obviously really high scoring, high quality and with no defects. But we’re looking for unique coffees.”',
    			'address' => '50 Wade Ave Toronto, ON M6H 2Z3',
    			'phone' => '(416) 479-3771'
    		],
    		[
    			'id' => 'arvo',
    			'name' => 'Arvo Coffee',
    			'description' => 'At Arvo Coffee, one of the main tenets is the emphasis oncreativity. The menu featuresthe staples as well as a rotatingselection of seasonal beveragesthat push the boundaries liketheir Hopped Cold Brew, HotDate Latte or Cascara Lemonade.Often, these unique drinks aredesigned by the baristas behindthe bar.',
    			'address' => '17 Gristmill Lane Toronto, ON M5A 3C4',
    			'phone' => '(647) 352-2786'
    		],
    		[	
    			'id' => 'neo',
    			'name' => 'Neo Coffee Bar',
    			'description' => '“The Neo Blend, we are working with deMello Palheta Coff ee Roasters to makethe house espresso… It’s trying to fi nd abalance of something that is good with milkbut also has the fruitiness and chocolate,”explained Nakagome about their customblend.',
    			'address' => '100-161 Frederick St Toronto, ONM5A 4P1',
    			'phone' => '(647) 348-8811'
    		],
    		[
    			'id' => 'de-mello',
    			'name' => 'DE MELLO PALHETA COFFEE ROASTERS X Merchant Sons',
    			'description' => 'Pushing the envelope in café design is new to de Mello,who would be more be used to stretching themselves onthe roasting side with one of the most expansive roastedcoff ee menus. They are consistently bringing in newcoff ees for their customers and cafés to dig into.',
    			'address' => '273 Richmond St WToronto, ONM5V 1X1',
    			'phone' => '(416) 506-3131'
			]
    	];
    }

    // Propeller Coffee Co
    // Arvo Coffee
    // Neo Coffee Bar
    // De Mello Palheta Coffee
    // Roasters x Merchant Sons
    // Tucana Coffee
    // Jacked Up Coffee Truck
    // Sorry Coffee Co
    // The Coffee Lab
    // HotBlack Coffee
    // Voodoo Child
    // Pilot Coffee Roasters
    // Lit Espresso Bar
    // Boxcar Social
}
