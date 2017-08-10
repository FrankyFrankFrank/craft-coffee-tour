<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use Carbon\Carbon;

class SeedLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('locations')->insert([
            [
                'shortname' => 'propeller',
                'name' => 'Propeller Coffee Co.',
                'description' => '“We look for unique coffees, and obviously really high scoring, high quality and with no defects. But we’re looking for unique coffees.”',
                'address' => '50 Wade Ave Toronto, ON M6H 2Z3',
                'phone' => '(416) 479-3771',
                'image' => 'img-overview-propeller.jpg',
                'feature_image' => '',
                'drink' => 'Single-Origin Pourover (or Single Origin Espresso)',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'article' => 'Geoff Polci, co-owner and green coffee buyer at Propeller Coffee Co., actually started roasting coffee all the way back in 1999 (in his home oven) and visited his first coffee farm that same year on his honeymoon in Mexico. A long ways away from roasting in an oven, Propeller Coffee Co. was named the Micro- Roaster of the Year by Roast Magazine in 2016. They are currently using an energy efficient Loring and put a heavy focus on sourcing high quality, interesting coffees. That often means traveling to coffee growing countries to get first crack at buying the really special lots. “We look for unique coffees, and obviously really high scoring, high quality and with no defects. But we’re looking for unique coffees,” shared Polci.'        
            ],
            [
                'shortname' => 'arvo',
                'name' => 'Arvo Coffee',
                'description' => 'At Arvo Coffee, one of the main tenets is the emphasis on creativity. The menu features the staples as well as a rotating selection of seasonal beverages that push the boundaries like their Hopped Cold Brew, Hot Date Latte or Cascara Lemonade. Often, these unique drinks are designed by the baristas behind the bar.',
                'address' => '17 Gristmill Lane Toronto, ON M5A 3C4',
                'phone' => '(647) 352-2786',
                'image' => 'img-overview-arvo.jpg',
                'feature_image' => '',
                'drink' => 'Coffee Cupping',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'article' => 'At Arvo Coffee, one of the main tenets is the emphasis on creativity. The menu features the staples as well as a rotating selection of seasonal beverages that push the boundaries like their Hopped Cold Brew, Hot Date Latte or Cascara Lemonade. Often, these unique drinks are designed by the baristas behind the bar. “I essentially challenged everyone on the team and said, ‘Let’s all design a drink.’ Claire created this Korean-infused non-coffee drink called the Hot Date Latte. It ended up being one of our best sellers. She gets super excited when we talk about it, because it’s very much her handiwork,” explained co-owner of Arvo Coffee, Justin Carriere. Another large focus at Arvo is bringing the quality, without the attitude – removing the obscurity behind coffee and making it approachable, which is why cupping is so important to them. “It’s a great opportunity to share with regulars what we get excited about and to taste a whole bunch of coffees side by side. It should be interactive and it should be community-focused, and cupping is a wonderful exercise to do just that.”'
            ],
            [    
                'shortname' => 'neo',
                'name' => 'Neo Coffee Bar',
                'description' => '“The Neo Blend, we are working with de Mello Palheta Coffee Roasters to make the house espresso… It’s trying to find a balance of something that is good with milk but also has the fruitiness and chocolate,” explained Nakagome about their custom blend.',
                'address' => '100-161 Frederick St Toronto, ONM5A 4P1',
                'phone' => '(647) 348-8811',
                'image' => 'img-overview-neo.jpg',
                'feature_image' => '',
                'drink' => 'Cappuccino (or Medium Drip Coffee)',
                 'created_at' => Carbon::now(),
                 'updated_at' => Carbon::now(),
                 'article' => '“When I moved to Toronto in 2009, there weren’t many places to go to eat sweets and drink coffee,” shared Masashi Nakagome, co-owner and operator at Neo Coffee Bar, when comparing this city to his home country of Japan. He felt Toronto was missing a shop that served pastries that went hand in hand with their coffee program rather than being more of an afterthought. “In Japan, you can go to a coffee shop and get a strawberry shortcake or something wispy and fluffy without intense sweetness. That’s why I started doing the pastries that go well with coffee.” Neo hopes to bridge the two and provide both exceptional coffee and desserts. They bake their desserts in house and have a custom-tailored coffee blend by de Mello Palheta. They’ve also brought in over 20 coffee roasters from all around the world on feature over the past two years.'            
            ],
            [
                'shortname' => 'tucana',
                'name' => 'Tucana Coffee',
                'description' => '“You’ll notice in our shop that the baristas manually dose almost every shot that they pull. They use a scale for every shot that they pull and a timer, so they know how that shot is going to taste before they serve it to the customer.”',
                'address' => '1413 Dundas St W Toronto, ON M6J 1Y4',
                'phone' => '',
                'image' => 'img-overview-tucana.jpg',
                'feature_image' => '',
                'drink' => 'Cappucino (or Espresso)',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'article' => 'Bursting with personality and Cuban-inspired designs, Tucana Coffee is more than just a nice looking shop. Tenille Clarke, owner and operator at Tucana Coffee, spent four years perfecting her craft at Te Aro and working with Pilot Coffee before she started her own shop. “I think the fact that we’re so determined to make sure that every single drink is made really, really well… I know everyone who works here really puts a lot of care into the drinks that they serve and it’s a different shop. It’s really small, we don’t have a crazy impressive space, but what we’re able to do in the space I think is impressive in itself and I think that’s why we stand out.” Tucana is adamant about proper parameters. It’s all measured. “You’ll notice in our shop that the baristas manually dose almost every shot that they pull. They use a scale for every shot that they pull and a timer, so they know how that shot is going to taste before they serve it to the customer.”'
            ],
            [
                'shortname' => 'dmp',
                'name' => 'De Mello Palheta Coffee Roasters',
                'description' => 'Pushing the envelope in café design is new to de Mello, who would be more used to stretching themselves on the roasting side with one of the most expansive roasted coffee menus. They are consistently bringing in new coffees for their customers and cafés to dig into.',
                'address' => '273 Richmond St W Toronto, ONM5V 1X1',
                'phone' => '(416) 506-3131',
                'image' =>  'img-overview-demello.jpg',
                'feature_image' => '',
                'drink' => '12oz Latte (Milk, Soy or Almond Milk)',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'article' => '“The open concept just relates to it being like a living room… and it’s a place to relax, it’s not pretentious, it’s not a spot where you have to look up to a barista. It’s almost like showing up to a really good friend’s house,” shared Brendan Adams, Head Trainer at de Mello Palheta Coffee Roasters on this unique café in collaboration with homewares company Merchant Sons. Pushing the envelope in café design is new to de Mello, who would be more be used to stretching themselves on the roasting side with one of the most expansive roasted coffee menus. They are consistently bringing in new coffees for their customers and cafés to dig into. Setting the bar high stems from Felix Cha, one of the coowners at de Mello Palheta, who recently competed in the Coffee Cup Tasters Competition and took home first place in Canada by showcasing his ability to distinguish taste differences in specialty coffees.'
            ],
            [
                'shortname' => 'jacked-up',
                'name' => 'Jacked Up Coffee Truck',
                'description' => 'The Jacked Up Coffee truck is the brainchild of owner and operator, Jack Provan and very much reflective of his somewhat nomadic nature, as he was a barista in London, Melbourne and finally settled down here in Toronto.',
                'address' => '144 Yorkville Ave Toronto, ON M5R 1C2',
                'phone' => '(905) 924-0031',
                'image' =>  'img-overview-jackedup.jpg',
                'feature_image' => '',
                'drink' => 'Flat White (or Americano or Espresso)',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'article' => 'The Jacked Up Coffee truck is the brainchild of owner and operator, Jack Provan and very much reflective of his somewhat nomadic nature, as he was a barista in London, Melbourne and finally settled down here in Toronto. The 1975 Citreon H Van spent two years on the road traveling to his customers but now - like Provan - it has settled in one spot. It’s at the Yorkville location seven days a week, and Provan appreciates the fact that he’s able to make a longer connection with his customers. “We have been there since November 2016, and it’s been great getting to know so many regulars and being part of such a unique, vibrant community,” Provan said.'
            ],
            [
                'shortname' => 'sorry',
                'name' => 'Sorry Coffee Co.',
                'description' => '“The variety that’s introduced with our coffee program keeps things fresh and interesting for our staff and our more informed and discerning guests,”',
                'address' => '102 Bloor St W Toronto, ON M5S 1M8',
                'phone' => '(844) 548-6223',
                'image' => 'img-overview-sorry.jpg',
                'feature_image' => '',
                'drink' => 'Flat White (or Cortado or Americano)',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'article' => '“The variety that’s introduced with our coffee program keeps things fresh and interesting for our staff and our more informed and discerning guests,” shared Dylan Wu, Coffee Shop Director at Sorry Coffee Co. Despite Sorry Coffee Co. having been created by the clothing company Kit & Ace, they’re doing an incredible job with their coffee program. In Wu, who formerly worked at de Mello Palheta & Voodoo Child Espresso & Cocktail Bar, they’ve brought in a seasoned coffee veteran to run their shop. He’s brought a quality-focused approach to their café and really wants to showcase the range of what coffee can be. They have a rotating feature coffee roasted by de Mello Palheta and aren’t afraid to dive into the more adventuroustasting notes. “We are currently featuring a single-origin Ethiopia natural processed from the Sidamo region which carries notes of mango, banana and orange. When paired with nicely textured milk, it tastes like a mango milkshake.”'
            ],
            [
                'shortname' => 'boxcar',
                'name' => 'Boxcar Social',
                'description' => '“We get excited! When different expressions of Kenyan coffee, Ethiopian coffees seasonally come through. Our whole business model is about sharing that excitement.”',
                'address' => '4 Boulton Ave Toronto, ON M4M 2J3',
                'phone' => '(647) 344-4530',
                'image' =>  'img-overview-boxcar.jpg',
                'feature_image' => '',
                'drink' => '2 x Pourovers & Cascara Tea (Tasting Flight)',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'article' => '“Any coffee that wasn’t great was emotionally distressing,” shared Alex Castellani, an owner at Boxcar Social, while reminiscing about his early days at their first location in 2014. The solution? “Trying to create the systems, constantly never getting too comfortable with your methodology, with the equipment you use, and never getting too self-satisfied that the way you do things is the best way to do them. You’re always questioning, you’re always critiquing and therefore you’re always evolving.” Castellani has been heavily inspired by ‘place’ and it was part of what pushed him to be a Barista as well as motivated a lot of the decisions at Boxcar - piecing together the origin and how that impacts the profile of the coffee you drink. “That was fascinating to me, that sensory experiences could be traced back to a place. Starting to build that scaffolding of knowledge of place,” Castellani said. “We get excited! When different expressions of Kenyan coffee, Ethiopian coffees seasonally come through. Our whole business model is about sharing that excitement.”'
            ],
            [
                'shortname' => 'coffee-lab',
                'name' => 'The Coffee Lab',
                'description' => 'Tucked into the Annex Willow Books store, Campos has one of the more ambitious coffee programs and is continually bringing in coffee from international roasters – whether it’s Glitch Coffee Roasters from Japan or another roaster that is intriguing him at the moment.',
                'address' => '333 Bloor St W Toronto, ON M5S 1W7',
                'phone' => '(647) 212-8817',
                'image' => 'img-overview-coffeelab.jpg',
                'feature_image' => '',
                'drink' => '“The Drop” (or “The 6”) signature drink',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'article' => 'It’s all about making the best of the space you have. Fifty-two square feet is all Joshua Campos of The Coffee Lab can use at his location, but the small space doesn’t restrict his aspirations or creativity. Tucked into the Annex Willow Books store, Campos has one of the more ambitious coffee programs and is continually bringing in coffee from international roasters – whether it’s Glitch Coffee Roasters from Japan or another roaster that is intriguing him at the moment. He’s often sourcing Cup of Excellence coffees, which is something Campos is very proud of. The Cup of Excellence is somewhat like the Oscars of the coffee world. The competition is for coffee producers, and every year, thousands of coffees are submitted for consideration. The coffee lots are put under extreme scrutiny and the very best green beans are then sold via auction to roasters internationally. The Coffee Lab is one of the few places where you can get these beans in the city.'
            ],
            [
                'shortname' => 'hotblack',
                'name' => 'Hotblack Coffee',
                'description' => 'Kishi has quite the storied past with specialty coffee, formerly working at Dark Horse Espresso & Detour Coffee Roasters prior to opening HotBlack Coffee with business partner Jimson Bienenstock. She frequently competed (and did quite well) in barista competitions where competitors are tested on three things: espresso, milk-based drinks and a signature drink.',
                'address' => '245 Queen St W Toronto, ON M5V 1Z4',
                'phone' => '(416) 840-6141',
                'image' =>  'img-overview-hotblack.jpg',
                'feature_image' => '',
                'drink' => '“Green Eye” Mint Infused Cold Brew Signature Drink (or Coffee Popsicle, or 12oz Coffee)',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'article' => '“All of the [signature] menu items that we have now, they just popped into my mind. Each coffee has different flavours, so it just kind of pops up like ‘Oh, this might be good with that,’” shared Momiji Kishi, co-owner and operator at HotBlack Coffee, on her eureka moments that happen when designing her café’s unique drinks. Kishi has quite the storied past with specialty coffee, formerly working at Dark Horse Espresso & Detour Coffee Roasters prior to opening HotBlack Coffee with business partner Jimson Bienenstock. She frequently competed (and did quite well) in barista competitions where competitors are tested on three things: espresso, milk-based drinks and a signature drink. It’s quite clear that the experience of designing signature drinks has had practical uses at HotBlack, whether it’s for the “Green Eye” Mint-Infused Cold Brew, a Coffee Popsicle or a Lemonade-Ginger-Ice- Espresso concoction currently in the works. However, the most important thing to Kishi? “I just want customers to enjoy it!”'
            ],
            [
                'shortname' => 'voodoo',
                'name' => 'Voodoo Child Espresso',
                'description' => 'Voodoo Child is a multi-roaster café with a menu that always has two espressos on offer. It changes with the seasonality of coffee. However, one choice will feature more of a classic flavour profile and the other will be more adventurous and fruit-forward.',
                'address' => '388 College St Toronto, ON M5T 1S7',
                'phone' => '(647) 748-1011',
                'image' => 'img-overview-voodoo.jpg',
                'feature_image' => '',
                'drink' => 'Espresso',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'article' => '“I think Voodoo Child is just a really chill place for a barista to learn… This is like the equivalent of barista PhD,” shared Alex Nassar, Owner and Operator at Voodoo Child Espresso & Cocktail Bar, on the reason why so many exceptional baristas have come through this café. Voodoo Child is a multi-roaster café with a menu that always has two espressos on offer. It changes with the seasonality of coffee. However, one choice will feature more of a classic flavour profile and the other will be more adventurous and fruit-forward. “I’d like it to be known that we just don’t compromise. We make really, really good stuff , and that’s it… We’ll only pass stuff over the counter that we’re proud of. I think a lot of people in the city forget that what we do is a craft and I want us at Voodoo Child to embrace that craft, and I want everybody who walks through the door [to know] that - whether it’s a cocktail or a shot of espresso what we’re doing is a craft.”'
            ],
            [
                'shortname' => 'pilot',
                'name' => 'Pilot Coffee Roasters',
                'description' => 'Brett Johnston, Head of Innovation at Pilot Coffee Roasters was responsible for designing their Cold Brew program and left no stone unturned when trying to develop their recipe and processes : whether it was trying hot brew and a flash chill, a hot bloom and a cold crash of water, using ambient water for 6-12 hours or trying the Japanese Iced Coffee method.',
                'address' => '50 Wagstaff Dr Toronto, ON M4L 3W9',
                'phone' => '(416) 546-4006',
                'image' => 'img-overview-pilot.jpg',
                'feature_image' => '',
                'drink' => 'Cold Brew',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'article' => '“I think that is a true blessing about the job. There are certainly challenging moments, but I can say I’m never bored, which feels great,” said Brett Johnston, Head of Innovation at Pilot Coffee Roasters. His role is all about doing industry research, which can lead him to sometimes feel like a coffee-mad-scientist. He was also responsible for designing their Cold Brew program and left no stone unturned when trying to develop their recipe and processes : whether it was trying hot brew and a flash chill, a hot bloom and a cold crash of water, using ambient water for 6-12 hours or trying the Japanese Iced Coffee method. “I certainly don’t want to rule anything out from any bias or judgment on any kind of brewing, but I just think that if you’re pleased with the result, then the process is valid. So I let that guide me,” Johnston added. “I’m not binding myself to one set approach for eternity per se. I think the goal is to get really balanced flavours that represent the coffee well.”'
            ],
            [
                'shortname' => 'lit',
                'name' => 'Lit Espresso Bar',
                'description' => '“We want to create a coffee that’s super sweet and super balanced. We still want you to taste the notes from origin, but that’s kind of secondary to the balance and sweetness that we want out of our coffees. That’s not to say we want to destroy everything that you should taste in origin, but we think that it’s much more approachable this way.”',
                'address' => '1517 Bayview Ave East York, ON M4G 3B5',
                'phone' => '',
                'image' =>  'img-overview-lit.jpg',
                'feature_image' => '',
                'drink' => 'Espresso',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'article' => '“Pig Iron started because I wanted to get more involved in coffee … and not just buy coffee from roasters, I wanted to learn more. On a whim, I went out and bought a roaster without even having a place to roast,” shared Joe Angellotti, owner at Pig Iron Coffee Roasters and Lit Espresso Bar on his roaster’s start. However impulsive the beginning was, their coffee program today is much more meticulous, focused and data-driven. They’re always looking to bring in quality green coffees. However when it comes to their roast profi le, the No.1 priority is sweetness and balance. “We want to create a coffee that’s super sweet and super balanced. We still want you to taste the notes from origin, but that’s kind of secondary to the balance and sweetness that we want out of our coffees. That’s not to say we want to destroy everything that you should taste in origin, but we think that it’s much more approachable this way,” noted Jason Tan, Head Roaster at Pig Iron Coffee Roasters.'
                ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
