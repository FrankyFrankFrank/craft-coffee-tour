<?php

use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->insert([
        	'shortname' => 'propeller',
        	'name' => 'Propeller Coffee Co.',
        	'description' => '“We look for unique coffees, and obviously really high scoring, high quality and with no defects. But we’re looking for unique coffees.”',
        	'address' => '50 Wade Ave Toronto, ON M6H 2Z3',
        	'phone' => '(416) 479-3771',
        	'image' => 'img-overview-propeller.jpg',
        	'drink' => 'Single-Origin Pourover (or Single Origin Espresso)'
        ]);

        DB::table('locations')->insert([
    			'shortname' => 'arvo',
    			'name' => 'Arvo Coffee',
    			'description' => 'At Arvo Coffee, one of the main tenets is the emphasis on creativity. The menu features the staples as well as a rotatingselection of seasonal beverages that push the boundaries like their Hopped Cold Brew, HotDate Latte or Cascara Lemonade. Often, these unique drinks aredesigned by the baristas behind the bar.',
    			'address' => '17 Gristmill Lane Toronto, ON M5A 3C4',
    			'phone' => '(647) 352-2786',
                'image' => 'img-overview-arvo.jpg',
                'drink' => 'Coffee Cupping'
    		]);
		
		DB::table('locations')->insert([	
			'shortname' => 'neo',
			'name' => 'Neo Coffee Bar',
			'description' => '“The Neo Blend, we are working with de Mello Palheta Coffee Roasters to make the house espresso… It’s trying to find a balance of something that is good with milk but also has the fruitiness and chocolate,” explained Nakagome about their custom blend.',
			'address' => '100-161 Frederick St Toronto, ONM5A 4P1',
			'phone' => '(647) 348-8811',
            'image' => 'img-overview-neo.jpg',
            'drink' => 'Cappuccino (or Medium Drip Coffee)'
		]);
		
		DB::table('locations')->insert([
			'shortname' => 'tucana',
			'name' => 'Tucana Coffee',
			'description' => '“You’ll notice in our shop that the baristas manually dose almost every shot that they pull. They use a scale for every shot that they pull and a timer, so they know how that shot is going to taste before they serve it to the customer.”',
			'address' => '1413 Dundas St W Toronto, ON M6J 1Y4',
			'phone' => '',
            'image' => 'img-overview-tucana.jpg',
            'drink' => 'Cappucino (or Espresso)'
		]);
		
		DB::table('locations')->insert([
			'shortname' => 'de-mello',
			'name' => 'De Mello Palheta Coffee Roasters',
			'description' => 'Pushing the envelope in café design is new to de Mello, who would be more used to stretching themselves on the roasting side with one of the most expansive roasted coffee menus. They are consistently bringing in new coffees for their customers and cafés to dig into.',
			'address' => '273 Richmond St W Toronto, ONM5V 1X1',
			'phone' => '(416) 506-3131',
            'image' =>  'img-overview-demello.jpg',
            'drink' => '12oz Latte (Milk, Soy or Almond Milk)'
		]);
		
		DB::table('locations')->insert([
			'shortname' => 'jacked-up',
			'name' => 'Jacked Up Coffee Truck',
			'description' => 'The Jacked Up Coffee truck is the brainchild of owner and operator, Jack Provan and very much reflective of his somewhat nomadic nature, as he was a barista in London, Melbourne and finally settled down here in Toronto.',
			'address' => '144 Yorkville Ave Toronto, ON M5R 1C2',
			'phone' => '(905) 924-0031',
            'image' =>  'img-overview-jackedup.jpg',
            'drink' => 'Flat White (or Americano or Espresso)'
		]);
		
		DB::table('locations')->insert([
			'shortname' => 'sorry',
			'name' => 'Sorry Coffee Co.',
			'description' => '“The variety that’s introduced with our coffee program keeps things fresh and interesting for our staff and our more informed and discerning guests,”',
			'address' => '102 Bloor St W Toronto, ON M5S 1M8',
			'phone' => '(844) 548-6223',
            'image' => 'img-overview-sorry.jpg',
            'drink' => 'Flat White (or Cortado or Americano)'
		]);
        
        DB::table('locations')->insert([
            'shortname' => 'boxcar',
            'name' => 'Boxcar Social',
            'description' => '“We get excited! When different expressions of Kenyan coffee, Ethiopian coffees seasonally come through. Our whole business model is about sharing that excitement.”',
            'address' => '4 Boulton Ave Toronto, ON M4M 2J3',
            'phone' => '(647) 344-4530',
            'image' =>  'img-overview-boxcar.jpg',
            'drink' => '2 x Pourovers & Cascara Tea (Tasting Flight)'
        ]);
		
		DB::table('locations')->insert([
			'shortname' => 'coffee-lab',
			'name' => 'The Coffee Lab',
			'description' => 'Tucked into the Annex Willow Books store, Campos has one of the more ambitious coffee programs and is continually bringing in coffee from international roasters – whether it’s Glitch Coffee Roasters from Japan or another roaster that is intriguing him at the moment.',
			'address' => '333 Bloor St W Toronto, ON M5S 1W7',
			'phone' => '(647) 212-8817',
            'image' => 'img-overview-coffeelab.jpg',
            'drink' => '“The Drop” (or “The 6”) signature drink'
		]);
		
		DB::table('locations')->insert([
			'shortname' => 'hotblack',
			'name' => 'Hotblack Coffee',
			'description' => 'Kishi has quite the storied past with specialty coffee, formerly working at Dark Horse Espresso & Detour Coffee Roasters prior to opening HotBlack Coffee with business partner Jimson Bienenstock. She frequently competed (and did quite well) in barista competitions where competitors are tested on three things: espresso, milk-based drinks and a signature drink.',
			'address' => '245 Queen St W Toronto, ON M5V 1Z4',
			'phone' => '(416) 840-6141',
            'image' =>  'img-overview-hotblack.jpg',
            'drink' => '“Green Eye” Mint Infused Cold Brew Signature Drink (or Coffee Popsicle, or 12oz Coffee)'
		]);
		
		DB::table('locations')->insert([
			'shortname' => 'voodoo',
			'name' => 'Voodoo Child Espresso',
			'description' => 'Voodoo Child is a multi-roaster café with a menu that always has two espressos on offer. It changes with the seasonality of coffee. However, one choice will feature more of a classic flavour profile and the other will be more adventurous and fruit-forward.',
			'address' => '388 College St Toronto, ON M5T 1S7',
			'phone' => '(647) 748-1011',
            'image' => 'img-overview-voodoo.jpg',
            'drink' => 'Espresso'
		]);
		
		DB::table('locations')->insert([
			'shortname' => 'pilot',
			'name' => 'Pilot Coffee Roasters',
			'description' => 'Brett Johnston, Head of Innovation at Pilot Coffee Roasters was responsible for designing their Cold Brew program and left no stone unturned when trying to develop their recipe and processes : whether it was trying hot brew and a flash chill, a hot bloom and a cold crash of water, using ambient water for 6-12 hours or trying the Japanese Iced Coffee method.',
			'address' => '50 Wagstaff Dr Toronto, ON M4L 3W9',
			'phone' => '(416) 546-4006',
            'image' => 'img-overview-pilot.jpg',
            'drink' => 'Cold Brew'
		]);
		
		DB::table('locations')->insert([
			'shortname' => 'lit',
			'name' => 'Lit Espresso Bar',
		 	'description' => '“We want to create a coffee that’s super sweet and super balanced. We still want you to taste the notes from origin, but that’s kind of secondary to the balance and sweetness that we want out of our coffees. That’s not to say we want to destroy everything that you should taste in origin, but we think that it’s much more approachable this way.”',
			'address' => '1517 Bayview Ave East York, ON M4G 3B5',
			'phone' => '',
            'image' =>  'img-overview-lit.jpg',
            'drink' => 'Espresso'
		]);
    }
}
